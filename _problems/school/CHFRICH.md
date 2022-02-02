---
{"category_name":"school","problem_code":"CHFRICH","problem_name":"Richie Rich","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":true,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/fYxwsep6GQI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"10-06-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"ltime97","3":"math"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHFRICH","time":{"view_start_date":1624727702,"submit_start_date":1624727702,"visible_start_date":1624727702,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFRICH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin](https://www.codechef.com/download/translated/LTIME97/mandarin/CHFRICH.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME97/bengali/CHFRICH.pdf), [Russian](https://www.codechef.com/download/translated/LTIME97/russian/CHFRICH.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME97/vietnamese/CHFRICH.pdf) as well.

Chef aims to be the richest person in Chefland by his new restaurant franchise. Currently, his assets are worth $A$ billion dollars and have no liabilities. He aims to increase his assets by $X$ billion dollars per year.

Also, all the richest people in Chefland are not planning to grow and maintain their current worth.

To be the richest person in Chefland, he needs to be worth at least $B$ billion dollars. How many years will it take Chef to reach his goal if his value increases by $X$ billion dollars each year?

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains a single line of input, three integers $A$, $B$, $X$. 

###Output
For each test case, output in a single line the answer to the problem.

###Constraints 
- $1 \leq T \leq 21\ 000$
- $100 \leq A < B \leq 200$
- $1 \leq X \leq 50$
- $X$ divides $B - A$

###Subtasks
**Subtask #1 (100 points):** Original constraints

###Sample Input
```
3
100 200 10
111 199 11
190 200 10
```
	
###Sample Output
```
10
8
1
```
	
###Explanation
**Test Case $1$:** Chef needs to increase his worth by $200 - 100 = 100$ billion dollars and his increment per year being $10$ billion dollars, so it will take him $\frac{100}{10} = 10$ years to do so.

**Test Case $2$:** Chef needs to increase his worth by $199 - 111 = 88$ billion dollars and his increment per year being $11$ billion dollars, so it will take him $\frac{88}{11} = 8$ years to do so.

**Test Case $3$:** Chef needs to increase his worth by $200 - 190 = 10$ billion dollars and his increment per year being $10$ billion dollars, so it will take him $\frac{10}{10} = 1$ year to do so.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>