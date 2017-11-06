import http.cookiejar as cookielib
import os
import urllib
import re
import string
from bs4 import BeautifulSoup
import requests;
import json;
import time
import sys
import logging
import xml.etree.ElementTree as ET


import MySQLdb
conn = MySQLdb.connect(host= "localhost",
                  user="root",
                  passwd="newpassword",
                  db="engy1")


cookie_filename = "parser.cookies.txt"
logging.basicConfig(format='%(asctime)s %(message)s', filename='scraper.log', level=logging.DEBUG)

class LinkedInParser(object):

    def __init__(self):
        self.opener = urllib.request.build_opener(
            urllib.request.HTTPRedirectHandler(),
            urllib.request.HTTPHandler(debuglevel=0),
            urllib.request.HTTPSHandler(debuglevel=0),
            #urllib.request.HTTPCookieProcessor(self.cj)
        )
        self.opener.addheaders = [
            ('User-agent', (
            'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'))
        ]

        response = self.opener.open('https://www.amazon.com/Apple-iPad-WiFi-Space-Model/dp/B01LTIOREG/ref=as_sl_pc_tf_til?tag=fakingoodidea-20&linkCode=w00&linkId=bf7aac78bc87f9b0e46dfd92153e71d6&creativeASIN=B01LTIORC8&th=1')

        readed  =response.read().decode("utf-8");
        soup = BeautifulSoup(readed, "html5lib")

        title = soup.find("span", {'id' : 'productTitle'})
        titleString = title.next;
        print(titleString);

        price = soup.find("span", {'id': 'priceblock_ourprice'})
        priceString = price.next;
        print(priceString );


        photo = soup.find("li", {'class': 'image'})
        photoString = photo.next;


        photos = soup.find("div", {'id': 'altImages'})
        imgs = photos.findAll('img');
        for img in imgs:
            print(img['src'])
            src = img['src'];
            length = len(src)
            cutted = src[:length-7]
            print(cutted + '557_.jpg')


        reviews = soup.find("div", {'id': 'averageCustomerReviews'})
        review = reviews.find("span", {'class': 'a-icon-alt'})

        print(review.next)

        desc =soup.find("div", {'id': 'productDescription'})
        descP=desc.find('p');
        print(descP.next)

        features = soup.find("div", {'id': 'featurebullets_feature_div'})
        featuresContainer = features.find('ul');
        print(featuresContainer)



invalid_escape = re.compile(r'\\[0-7]{1,6}')
parser = LinkedInParser()


