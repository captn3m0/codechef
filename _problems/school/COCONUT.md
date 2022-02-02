---
{"category_name":"school","problem_code":"COCONUT","problem_name":"Summer Heat","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/BN_Se_7CyO0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"iscsi","date_added":"31-05-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"june21"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/COCONUT","time":{"view_start_date":1623663000,"submit_start_date":1623663000,"visible_start_date":1623663000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COCONUT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Vietnamese](https://www.codechef.com/download/translated/JUNE21/vietnamese/COCONUT.pdf),
[Bengali](https://www.codechef.com/download/translated/JUNE21/bengali/COCONUT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE21/mandarin/COCONUT.pdf), and [Russian](https://www.codechef.com/download/translated/JUNE21/russian/COCONUT.pdf) as well. 

Chefland has $2$ different types of coconut, type $A$ and type $B$. Type $A$ contains only $x_a$ milliliters of coconut water and type $B$ contains only $x_b$ grams of coconut pulp. Chef's nutritionist has advised him to consume $X_a$ milliliters of coconut water and $X_b$ grams of coconut pulp every week in the summer. Find the total number of coconuts (type $A$ + type $B$) that Chef should buy each week to keep himself active in the hot weather.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains a single line of input, four integers $x_a$, $x_b$, $X_a$, $X_b$.

###Output
For each test case, output in a single line the answer to the problem.

###Constraints 
- $1 \leq T \leq 15000$
- $100 \leq x_a \leq 200$
- $400 \leq x_b \leq 500$
- $1000 \leq X_a \leq 1200$
- $1000 \leq X_b \leq 1500$
- $x_a$ divides $X_a$.
- $x_b$ divides $X_b$.

###Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input
```
3
100 400 1000 1200
100 450 1000 1350
150 400 1200 1200
```

###Sample Output
```
13
13
11
```
	
###Explanation
**TestCase $1$:** 
Number of coconuts of Type $A$ required = $\frac{1000}{100} = 10$ and number of coconuts of Type $B$ required = $\frac{1200}{400} = 3$.  So the total number of coconuts required is $10 + 3 = 13$.

**TestCase $2$:** 
Number of coconuts of Type $A$ required = $\frac{1000}{100} = 10$ and number of coconuts of Type $B$ required = $\frac{1350}{450} = 3$.  So the total number of coconuts required is $10 + 3 = 13$.

**TestCase $3$:** 
Number of coconuts of Type $A$ required = $\frac{1200}{150} = 8$ and number of coconuts of Type $B$ required = $\frac{1200}{400} = 3$.  So the total number of coconuts required is $8 + 3 = 11$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>