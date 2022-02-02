---
{"category_name":"easy","problem_code":"CHARGES","problem_name":"Charges","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 3\r\n010\r\n2 1 3","output":"4\r\n3\r\n2","explanation":"**Update 1:** After reversing the parity of particle $2$, the new configuration is $000$. Since all the particles have a similar charge, each is separated from the previous by a distance of $2$ units. So the location of particle $3$ is $2 + 2 = 4$ units from the first particle.\r\n\r\n**Update 2:** After reversing the parity of particle $1$, the new configuration is $100$. Here, the charges of particles $1$ and $2$ differ, so they are separated by $1$ unit. The charges of particles $2$ and $3$ agree, so they are separated by $2$ units. So, the location of particle $3$ is $1 + 2 = 3$ units from the first particle.\r\n\r\n**Update 3:** After reversing the charge of particle $3$, the new configuration is $101$. Here, particles $1$ and $2$ are separated by $1$ unit and particles $2$ and $3$ are separated by $1$ unit. So the location of particle $3$ is $1 + 1 = 2$ units from the first particle.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/cnrTw27ddg4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"20-04-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"ltime96"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHARGES","time":{"view_start_date":1622482204,"submit_start_date":1622482204,"visible_start_date":1622482204,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHARGES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME96/bengali/CHARGES.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME96/mandarin/CHARGES.pdf), [Russian](https://www.codechef.com/download/translated/LTIME96/russian/CHARGES.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME96/vietnamese/CHARGES.pdf) as well.

There are $N$ subatomic particles lined up in a row. There are two types: protons and electrons. Protons have a positive charge and are represented by $1$, while electrons have a negative charge and are represented by $0$.

Our current understanding of physics gives us a way to predict how the particles will be spaced out, if we know their charges. Two adjacent particles will be separated by $1$ unit if they have opposite charges, and $2$ units if they have the same charge.

When Chef is not in the kitchen, he is doing physics experiments on subatomic particles. He is testing the hypothesis by having $N$ particles in a row, and he will change the charge of a particle $K$ times. In the $i$-th update, he will change the charge of the $Q_i$-th particle. After each update, find the distance between the first and last particle.

**Note:** Each update is persistent for further updates.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains three lines of input.
- The first line contains two integers $N$, $K$.
- The second line contains a string $S$ of length $N$, where $S_i$ represents the initial charge on $i$-th particle.
- The third line contains $K$ integers $Q_1, Q_2, \ldots, Q_K$, the positions of the changed particles.

###Output
For each test case, output $K$ lines, where the $i$-th line contains the answer after the updates $Q_1,\ldots, Q_i$ have been made.

###Constraints 
- $1 \leq T \leq 5$
- $1 \leq N, K \leq 10^5$
- $S$ contains only $0$ and $1$ characters.
- $1 \leq Q_i \leq N$
- The sum of $K$ over all testcases is at most $2 \cdot 10^5$

###Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input
```
1
3 3
010
2 1 3
```

###Sample Output
```
4
3
2
```
	
###Explanation
**Update 1:** After reversing the parity of particle $2$, the new configuration is $000$. Since all the particles have a similar charge, each is separated from the previous by a distance of $2$ units. So the location of particle $3$ is $2 + 2 = 4$ units from the first particle.

**Update 2:** After reversing the parity of particle $1$, the new configuration is $100$. Here, the charges of particles $1$ and $2$ differ, so they are separated by $1$ unit. The charges of particles $2$ and $3$ agree, so they are separated by $2$ units. So, the location of particle $3$ is $1 + 2 = 3$ units from the first particle.

**Update 3:** After reversing the charge of particle $3$, the new configuration is $101$. Here, particles $1$ and $2$ are separated by $1$ unit and particles $2$ and $3$ are separated by $1$ unit. So the location of particle $3$ is $1 + 1 = 2$ units from the first particle.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>