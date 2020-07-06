FROM pet3rmatta/phantomjs-alpine

WORKDIR /app

COPY src .
COPY flag /flag

RUN echo "flag{this_is_fake_flag}" > /flag.txt && \
    npm install

EXPOSE 3500

CMD ["node", "index.js"]
