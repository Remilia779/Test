class Greeter:
    def __init__(self, message):
        self.message = message

    def encode_message(self):
        return self.message.encode('utf-8')

    def decode_message(self, encoded_message):
        return encoded_message.decode('utf-8')

    def print_message(self):
        encoded = self.encode_message()
        decoded = self.decode_message(encoded)
        print(decoded)

if __name__ == "__main__":
    hello_world = Greeter("Hello, World!")
    hello_world.print_message()
