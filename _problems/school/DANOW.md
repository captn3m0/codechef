---
{"category_name":"school","problem_code":"DANOW","problem_name":"Danny Wants To Know","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aashu_k","problem_tester":null,"date_added":"5-04-2019","tags":{"0":"aashu_k"},"time":{"view_start_date":1554669000,"submit_start_date":1554669000,"visible_start_date":1554669000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>As we know, Danny has a huge army and each time she wins a battle the size of her army is increased. Missandei, her advisor and Handmaiden, keeps the log of each battle and the amount and strength of soldiers won in a battle. 

Now, Danny has some questions for Missandei in which she asks the strength of the army gained during some battles. She will ask the query of the form $L, R$ and Missandei has to tell the strength gained in between the $L$ and $R$ battles. Help Missandei. 

You are given an array $A$, where $A[i]$ represents the number of soldiers won in $i^{th}$ battle and the strength of a soldier who won in $i^{th}$ battle is given in another array $B[i]$. ( $B[i]$ represents the strength of each soldier who won in the $i^{th}$ battle). 

###Input:

- First line will contain $N$ and $Q$, number of battles fought and number of queries. 
- Next line contains $N$ space separated integers denoting the array $A$.
- Next line contains $N$ space separated integers denoting the array $B$.
- Next $Q$ lines contain two integers $L$ and $R$.

###Output:
For each query, output the strength gained in between the $L$ and $R$ battles (both inclusive).

###Constraints 
- $1 \leq N, Q \leq 1000$
- $0 \leq A[i] \leq 10^6$
- $0 \leq B[i] \leq 10^6$
- $1 \leq L \leq R \leq N$

###Sample Input:
	5 3
	2 3 1 6 5
	1 2 3 4 5
	2 3
	1 1
	1 5
###Sample Output:
	9
	2
	60
###EXPLANATION:
For the first query, strength gained in $2^{nd}$ battle is $2*3 = 6$ and in $3^{rd}$ battle is $3*1 = 3$. Total = $6 + 3 = 9$.
