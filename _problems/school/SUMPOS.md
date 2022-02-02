---
{"category_name":"school","problem_code":"SUMPOS","problem_name":"Pair Me","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n1 1 2\r\n1 3 2\r\n2 2 2\r\n100 100 201\r\n11 22 33","output":"YES\r\nYES\r\nNO\r\nNO\r\nYES","explanation":"***Case 1:*** For this case, the third integer can be written as the sum of the first two. $2 = 1 + 1$\r\n\r\n***Case 2:*** For this case, the second integer can be written as the sum of the first and third. $3 = 1 + 2$\r\n\r\n***Case 3:*** For this case, no integer can be written as the sum of other two.\r\n\r\n***Case 4:*** For this case, no integer can be written as the sum of other two.\r\n\r\n***Case 5:*** For this case, the third integer can be written as the sum of the first two. $33 = 11 + 22$","isDeleted":false}}},"video_editorial_url":"https://youtu.be/hcAkH_U8468","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"29-01-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"ltime92","3":"math"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SUMPOS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUMPOS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME92/hindi/SUMPOS.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME92/bengali/SUMPOS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME92/mandarin/SUMPOS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME92/russian/SUMPOS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME92/vietnamese/SUMPOS.pdf) as well.

Chef is always trying to find patterns within integers. Today Chef has $3$ positive integers and he wonders if any one of them can be written as the sum of the other two integers.

###Input:

- First line will contain the number $5$, which is the number of testcases. Then the testcases follow. 
- Each testcase contains a single line of input, with three space-separated positive integers $x$, $y$, and $z$. 

###Output:
For each testcase, output in a single line, "YES" if it's possible to represent any integer among the three integers as the sum of the other two integers, and "NO" if not. 

***NOTE:*** The output is case insensitive, meaning both uppercase and lowercase characters can be used at any position of the output string.

###Constraints 
- $1 <= x, y, z <= 1000$

### Subtasks
- 100% points - Original constraints

###Sample Input:
```
5
1 1 2
1 3 2
2 2 2
100 100 201
11 22 33
```

###Sample Output:
```
YES
YES
NO
NO
YES
```

###Explanation:
***Case 1:*** For this case, the third integer can be written as the sum of the first two. $2 = 1 + 1$

***Case 2:*** For this case, the second integer can be written as the sum of the first and third. $3 = 1 + 2$

***Case 3:*** For this case, no integer can be written as the sum of other two.

***Case 4:*** For this case, no integer can be written as the sum of other two.

***Case 5:*** For this case, the third integer can be written as the sum of the first two. $33 = 11 + 22$
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>