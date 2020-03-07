# importing the requests library
import requests

# api-endpoint
URL = "https://newsapi.org/v2/top-headlines?country=in&pageSize=100&apiKey=05aefe5393fc46d7a6e21a27b16718c0"

# sending get request and saving the response as response object
r = requests.get(url = URL)

# extracting data in json format
data = r.json()

print(data)
