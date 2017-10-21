# -*- coding: utf-8 -*-
import sys
import json
import mail_conf as settings
import smtplib
from email.mime.text import MIMEText
from email.utils import formatdate
from email.utils import formataddr
from email.header import Header

def send_mail(title, text):
    # メールを送る
    to = settings.MAIL_TO
    subject = title
    send_via_gmail(to, subject, text)

def send_via_gmail(to, subject, text):
    # smtpにてメール送信
    from_addr = settings.MAIL_FROM
    message = create_message(to, from_addr, subject, text)
    smtp = smtplib.SMTP(settings.MAIL_HOST, settings.MAIL_PORT)
    smtp.ehlo()
    smtp.starttls()
    smtp.ehlo()
    smtp.login(from_addr, settings.MAIL_PASS)
    smtp.sendmail(from_addr, [to], message.as_string())
    smtp.close()

def create_message(to, from_addr, subject, body):
    # メッセージをエンコードして返す
    encoding = 'utf-8'
    sender_name = Header(from_addr, encoding).encode()
    recipient_name = Header(from_addr, encoding).encode()
    message = MIMEText(body.encode(encoding), 'plain', _charset=encoding)
    message['Subject'] = Header(subject, encoding )
    message['From'] = formataddr((sender_name, from_addr))
    message['To'] = formataddr((recipient_name, to))
    message['Date'] = formatdate()
    return message

if __name__ == '__main__':
  args = sys.argv
  send_mail(args[1], args[2])

