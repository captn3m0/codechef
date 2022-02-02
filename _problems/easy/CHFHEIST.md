---
{"category_name":"easy","problem_code":"CHFHEIST","problem_name":"Bella ciao","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2 1 1 1\r\n3 2 1 1\r\n5 2 1 2","output":"3\r\n4\r\n13","explanation":"**Test Case $1$:** \r\n- On the first day, the rate of production is $1$ dollar per day so $1$ dollar is printed on the first day.  \r\n- On the second day, the rate of production is $1 + 1 = 2$ dollars per day so $2$ dollars are printed on the second day.\r\n- The total amount of money printed in $2$ days is $1 + 2 = 3$ dollars.\r\n\r\n**Test Case $2$:** \r\n- For the first two days, the rate of production is $1$ dollar per day so $1 \\cdot 2 = 2$ dollars are printed on the first two days.  \r\n- On the third day, the rate of production is $1 + 1 = 2$ dollars per day so $2$ dollars are printed on the third day.\r\n- The total amount of money printed in $3$ days is $2 + 2 = 4$ dollars.\r\n\r\n**Test Case $3$:** \r\n- For the first two days, the rate of production is $1$ dollar per day so $1 \\cdot 2 = 2$ dollars are printed on the first two days.  \r\n- On the next two days, the rate of production is $1 + 2 = 3$ dollars per day so $3 \\cdot 2 = 6$ dollars are printed on the next two days.\r\n- On the last day, the rate of production is $3 + 2 = 5$ dollars per day so $5$ dollars are printed on the last day.\r\n- The total amount of money printed in $5$ days is $2 + 6 + 5 = 13$ dollars.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/oO-j4vyVKpI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"iscsi","date_added":"17-05-2021","tags":{"0":"daanish_adm","1":"june21","2":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHFHEIST","time":{"view_start_date":1623663000,"submit_start_date":1623663000,"visible_start_date":1623663000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFHEIST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Vietnamese](https://www.codechef.com/download/translated/JUNE21/vietnamese/CHFHEIST.pdf),
[Bengali](https://www.codechef.com/download/translated/JUNE21/bengali/CHFHEIST.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE21/mandarin/CHFHEIST.pdf), and [Russian](https://www.codechef.com/download/translated/JUNE21/russian/CHFHEIST.pdf) as well. 

Chef is planning a heist in the reserve bank of Chefland. They are planning to hijack the bank for $D$ days and print the money. The initial rate of printing the currency is $P$ dollars per day and they increase the production by $Q$ dollars after every interval of $d$ days. For example, after $d$ days the rate is $P+Q$ dollars per day, and after $2d$ days the rate is $P+2Q$ dollars per day, and so on. Output the amount of money they will be able to print in the given period.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains a single line of input, four integers $D, d, P, Q$. 

###Output
For each test case, output in a single line the answer to the problem.

###Constraints 
- $1 \leq T \leq 10^5$
- $1 \leq d \leq D \leq 10^6$
- $1 \leq P, Q \leq 10^6$

###Subtasks
**Subtask #1 (15 points):** $d \leq D \leq 100$

**Subtask #2 (85 points):** original constraints

###Sample Input
```
3
2 1 1 1
3 2 1 1
5 2 1 2
```

###Sample Output
```
3
4
13
```

###Explanation
**Test Case $1$:** 
- On the first day, the rate of production is $1$ dollar per day so $1$ dollar is printed on the first day.  
- On the second day, the rate of production is $1 + 1 = 2$ dollars per day so $2$ dollars are printed on the second day.
- The total amount of money printed in $2$ days is $1 + 2 = 3$ dollars.

**Test Case $2$:** 
- For the first two days, the rate of production is $1$ dollar per day so $1 \cdot 2 = 2$ dollars are printed on the first two days.  
- On the third day, the rate of production is $1 + 1 = 2$ dollars per day so $2$ dollars are printed on the third day.
- The total amount of money printed in $3$ days is $2 + 2 = 4$ dollars.

**Test Case $3$:** 
- For the first two days, the rate of production is $1$ dollar per day so $1 \cdot 2 = 2$ dollars are printed on the first two days.  
- On the next two days, the rate of production is $1 + 2 = 3$ dollars per day so $3 \cdot 2 = 6$ dollars are printed on the next two days.
- On the last day, the rate of production is $3 + 2 = 5$ dollars per day so $5$ dollars are printed on the last day.
- The total amount of money printed in $5$ days is $2 + 6 + 5 = 13$ dollars.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>