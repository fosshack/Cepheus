a=0
l =1
for a in range(0,4):
	#text = open(str(a),'r').read()
	z= open(str(a),'r')
	lines = z.readlines()
	text = "".join([line.strip() for line in lines])
	from summa import summarizer
	from summa import keywords
	key = keywords.keywords(text)
	keyf = open("keywords.txt",'r').read()
	if str(keyf) in key:
		f = open("voice.html")
		g = open("voice2.html")
		test = summarizer.summarize(text)
		test  = test.strip('\n')
		html1 = f.read().strip('\n')
		html2 = g.read().strip('\n')
		print(html1+test+html2)
