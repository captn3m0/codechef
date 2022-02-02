---
{"category_name":"school","problem_code":"TWINGFT","problem_name":"Birthday Gifts","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3 1\r\n1 3 2\r\n3 1\r\n3 1 3\r\n5 2\r\n5 1 3 2 4","output":"3\r\n4\r\n8","explanation":"**Test Case $1$:** Chef moves first and he chooses the gift with cost $3$. His twin then chooses the gifts of costs $1$ and $2$.\r\n\r\n**Test Case $2$:** Chef allows his brother to choose first and his brother chooses a gift with cost $3$. Then Chef chooses the remaining gift with cost $3$. Since Chef moves second, he is allowed to choose one more gift, so he chooses gift with cost $1$. The total cost of Chef\u0027s gifts is $3 + 1 = 4$.\r\n\r\n**Test Case $3$:** Chef moves first and at the end he will have the gifts with costs $5$ and $3$. Hence, the total cost of gifts with Chef = $5 + 3 = 8$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/4Qx2WL0hozA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"akash_adm","problem_tester":"","date_added":"26-03-2021","tags":{"0":"akash_adm","1":"cakewalk","2":"ltime96"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TWINGFT","time":{"view_start_date":1622482204,"submit_start_date":1622482204,"visible_start_date":1622482204,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TWINGFT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME96/bengali/TWINGFT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME96/mandarin/TWINGFT.pdf), [Russian](https://www.codechef.com/download/translated/LTIME96/russian/TWINGFT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME96/vietnamese/TWINGFT.pdf) as well.

It’s Chef's birthday. He and his twin have received $N$ gifts in total. The $i$-th gift has a price of $A_i$. Each twin wants to keep the most expensive gifts for himself. 

The twins take $K$ turns alternately (each has $K$ turns, for $2\cdot K$ turns in total). It is given that $2\cdot K+1 \leq N$. In a turn, a person may choose one gift. The only exception is the last turn of the twin who moves second, where he gets to choose two gifts instead of one. Assuming they both choose gifts optimally and you can choose who takes the first turn, find the maximum total cost of the gifts that Chef keeps. 

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains two lines of input.
- The first line contains two space-separated integers $N$, $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$, the price of the gifts.

###Output
For each test case, output in a single line the answer to the problem.

###Constraints 
- $1 \leq T \leq 100$
- $3 \leq N \leq 10^3$
- $1 \leq K \leq \frac{N - 1}{2}$
- $1 \leq A_i \leq 10^9$

###Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input
```
3
3 1
1 3 2
3 1
3 1 3
5 2
5 1 3 2 4
```

###Sample Output
```
3
4
8
```
	
###Explanation
**Test Case $1$:** Chef moves first and he chooses the gift with cost $3$. His twin then chooses the gifts of costs $1$ and $2$.

**Test Case $2$:** Chef allows his brother to choose first and his brother chooses a gift with cost $3$. Then Chef chooses the remaining gift with cost $3$. Since Chef moves second, he is allowed to choose one more gift, so he chooses gift with cost $1$. The total cost of Chef's gifts is $3 + 1 = 4$.

**Test Case $3$:** Chef moves first and at the end he will have the gifts with costs $5$ and $3$. Hence, the total cost of gifts with Chef = $5 + 3 = 8$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>