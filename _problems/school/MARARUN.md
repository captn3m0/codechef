---
{"category_name":"school","problem_code":"MARARUN","problem_name":"Marathon","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1 1 1 2 3\r\n10 1 1 2 3\r\n10 3 1 2 3","output":"0\r\n1\r\n2","explanation":"**Test Case $1$:** The maximum distance covered by Chef is $1 \\cdot 1 = 1$ km which is less than any of the available distance categories. Hence Chef won\u0027t be able to claim a prize in any of the categories.\r\n\r\n**Test Case $2$:** The maximum distance covered by Chef is $10 \\cdot 1 = 10$ km which is equal to distance of the first category. Hence Chef can claim the maximum prize of $1$ units.\r\n\r\n**Test Case $3$:** The maximum distance covered by Chef is $10 \\cdot 3 = 30$ km which is more than the distance of the second category but less than that of the third category. Hence Chef can claim the maximum prize of $2$ units.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/-sTtdnfoyoM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"10-05-2021","tags":{"0":"cakewalk","1":"cook129","2":"daanish_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MARARUN","time":{"view_start_date":1621794604,"submit_start_date":1621794604,"visible_start_date":1621794604,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MARARUN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK129/mandarin/MARARUN.pdf), [Russian](https://www.codechef.com/download/translated/COOK129/russian/MARARUN.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK129/vietnamese/MARARUN.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK129/bengali/MARARUN.pdf) as well.

Chefland is holding a virtual marathon for the categories $10$ km, $21$ km and $42$ km having prizes $A, B, C$ ($A \lt B \lt C$) respectively to promote physical fitness. In order to claim the prize in a particular category the person must cover the total distance for that category within $D$ days. Also a single person **cannot** apply in multiple categories. 

Given the maximum distance $d$ km that Chef can cover in a single day, find the maximum prize that Chef can win at the end of $D$ days. If Chef can't win any prize, print $0$.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains a single line of input, five integers $D, d, A, B, C$. 

###Output
For each test case, output in a single line the answer to the problem.

###Constraints 
- $1 \leq T \leq 50$
- $1 \leq D \leq 10$
- $1 \leq d \leq 5$
- $1 \leq A \lt B \lt C \leq 10^5$

###Sample Input
```
3
1 1 1 2 3
10 1 1 2 3
10 3 1 2 3
```

###Sample Output
```
0
1
2
```
	
###Explanation
**Test Case $1$:** The maximum distance covered by Chef is $1 \cdot 1 = 1$ km which is less than any of the available distance categories. Hence Chef won't be able to claim a prize in any of the categories.

**Test Case $2$:** The maximum distance covered by Chef is $10 \cdot 1 = 10$ km which is equal to distance of the first category. Hence Chef can claim the maximum prize of $1$ units.

**Test Case $3$:** The maximum distance covered by Chef is $10 \cdot 3 = 30$ km which is more than the distance of the second category but less than that of the third category. Hence Chef can claim the maximum prize of $2$ units.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>