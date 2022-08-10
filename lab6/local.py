import requests

print("Список команд:\n1 - вывести все письма\n2 - вывести письмо по id\n"
      "3 - добавить новое письмо\n4 - удалить письмо по id")
command = int(input("Введите номер команды: "))
if command == 1:
    res = requests.get("http://127.0.0.1:3000/api/mails/0")
    print(res.json())
if command == 2:
    mail_id = input("Введите id письма (пример: mail_1): ")
    res = requests.get("http://127.0.0.1:3000/api/mails/"+mail_id)
    print(res.json())
if command == 3:
    date = input("Введите datatime: ")
    sub = input("Введите subject: ")
    fr = input("Введите from: ")
    mes = input("Введите message: ")
    res = requests.post("http://127.0.0.1:3000/api/mails/mail_4", json={"datatime": date, "subject": sub, "from": fr, "message": mes})
    print(res.json())

if command == 4:
    mail_id = input("Введите id письма (пример: mail_1): ")
    res = requests.delete("http://127.0.0.1:3000/api/mails/"+mail_id)
    print(res.json())
