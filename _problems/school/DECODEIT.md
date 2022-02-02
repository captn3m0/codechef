---
{"category_name":"school","problem_code":"DECODEIT","problem_name":"Encoded String","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n4\r\n0000\r\n8\r\n00001111\r\n4\r\n1001","output":"a\r\nap\r\nj","explanation":"- **Sample Case $1$ :**     \r\n\r\nThe first bit is $0$, so the letter lies among the first $8$ letters, i.e., among $a,b,c,d,e,f,g,h$. The second bit is $0$, so it lies among the first four of these, i.e., among $a,b,c,d$. \r\n\r\nThe third bit is $0$, so it again lies in the first half, i.e., it\u0027s either $a$ or $b$. Finally, the fourth bit is also $0$, so we know that the letter is $a$.\r\n\r\n- **Sample Case $2$ :**     \r\n\r\nEach four bits correspond to a character. Just like in sample case $1$, $0000$ is equivalent to $a$. Similarly, $1111$ is equivalent to $p$. So, the decoded string is $ap$.\r\n\r\n- **Sample Case $3$ :**     \r\n\r\nThe first bit is $1$, so the letter lies among the last $8$ letters, i.e., among $i,j,k,l,m,n,o,p$. The second bit is $0$, so it lies among the first four of these, i.e., among $i,j,k,l$. \r\n\r\nThe third bit is $0$, so it again lies in the first half, i.e., it\u0027s either $i$ or $j$. Finally, the fourth bit is $1$, so we know that the letter is $j$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Ma2kUa4lDoY","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"31-12-2020","tags":{"0":"akashbhalotia","1":"binary","2":"daanish_adm","3":"easy","4":"jan21","5":"observation"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DECODEIT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DECODEIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/DECODEIT.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/DECODEIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/DECODEIT.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/DECODEIT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/DECODEIT.pdf) as well.

An encoder encodes the **first $16$ lowercase English letters** using $4$ bits each. The first bit (from the left) of the code is $0$ if the letter lies among the first $8$ letters, else it is $1$, signifying that it lies among the last $8$ letters. The second bit of the code is $0$ if the letter lies among the first $4$ letters of those $8$ letters found in the previous step, else it's $1$, signifying that it lies among the last $4$ letters of those $8$ letters. Similarly, the third and the fourth bit each **signify the half in which the letter lies**. 

For example, the letter $j$ would be encoded as :
- Among $(a,b,c,d,e,f,g,h$ $|$ $i,j,k,l,m,n,o,p)$, $j$ appears in the second half. So the first bit of its encoding is $1$.
- Now, among $(i,j,k,l$ $|$ $m,n,o,p)$, $j$ appears in the first half. So the second bit of its encoding is $0$.
- Now, among $(i,j$ $|$ $k,l)$, $j$ appears in the first half. So the third bit of its encoding is $0$.
- Now, among $(i$ $|$ $j)$, $j$ appears in the second half. So the fourth and last bit of its encoding is $1$.

So $j$'s encoding is $1001$,

Given a binary encoded string $S$, of length at most $10^5$, decode the string. That is, the first 4 bits are the encoding of the first letter of the secret message, the next 4 bits encode the second letter, and so on. It is guaranteed that the string's length is a multiple of 4.

###Input:
- The first line of the input contains an integer $T$, denoting the number of test cases.
- The first line of each test case contains an integer $N$, the length of the encoded string.
- The second line of each test case contains the encoded string $S$.

###Output:
For each test case, print the decoded string, in a separate line.

###Constraints 
- $1 \leq T \leq 10$
- $4 \leq N \leq 10^5$
- The length of the encoded string is a multiple of $4$.
- $0 \le S_i \le 1$

###Subtasks
- **$100$ points :** Original constraints. 

###Sample Input:
```
3
4
0000
8
00001111
4
1001
```
###Sample Output:
```
a
ap
j
```
	
###Explanation:
- **Sample Case $1$ :**     

The first bit is $0$, so the letter lies among the first $8$ letters, i.e., among $a,b,c,d,e,f,g,h$. The second bit is $0$, so it lies among the first four of these, i.e., among $a,b,c,d$. 

The third bit is $0$, so it again lies in the first half, i.e., it's either $a$ or $b$. Finally, the fourth bit is also $0$, so we know that the letter is $a$.

- **Sample Case $2$ :**     

Each four bits correspond to a character. Just like in sample case $1$, $0000$ is equivalent to $a$. Similarly, $1111$ is equivalent to $p$. So, the decoded string is $ap$.

- **Sample Case $3$ :**     

The first bit is $1$, so the letter lies among the last $8$ letters, i.e., among $i,j,k,l,m,n,o,p$. The second bit is $0$, so it lies among the first four of these, i.e., among $i,j,k,l$. 

The third bit is $0$, so it again lies in the first half, i.e., it's either $i$ or $j$. Finally, the fourth bit is $1$, so we know that the letter is $j$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>