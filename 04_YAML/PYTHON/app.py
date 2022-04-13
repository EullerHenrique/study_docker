import yaml

if __name__ == '__main__':
    stream = open('test.yaml', 'r')
    dict = yaml.safe_load(stream)	
    for key, value in dict.items():
        print(key + " : " + str(value))