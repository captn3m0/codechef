---
{"category_name":"school","problem_code":"PSGRADE","problem_name":"Passing Marks","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n1 1 1 300 2 2 2\r\n3 2 2 6 2 2 2\r\n2 3 2 6 2 2 2\r\n2 2 3 6 2 2 2\r\n100 100 100 300 100 100 100","output":"NO\r\nNO\r\nNO\r\nNO\r\nYES","explanation":"**TestCase 1:** Chef is passing in all the subjects individually but his total score ($2 + 2 + 2 = 6$) is much below the required threshold of $300$ marks. So Chef doesn\u0027t pass the semester.\r\n\r\n**TestCase 2:** Chef\u0027s score in the first subject is less than the threshold, so he doesn\u0027t pass the semester.\r\n\r\n**TestCase 3:** Chef\u0027s score in the second subject is less than the threshold, so he doesn\u0027t pass the semester.\r\n\r\n**TestCase 4:** Chef\u0027s score in the third subject is less than the threshold, so he doesn\u0027t pass the semester.\r\n\r\n**TestCase 5:** Chef is passing in all the subjects individually and also his total score is equal to the required threshold of $300$ marks. So Chef passes the semester.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/By0XHeVwYrQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"31-03-2021","tags":{"0":"cakewalk","1":"cook128","2":"daanish_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PSGRADE","time":{"view_start_date":1618772404,"submit_start_date":1618772404,"visible_start_date":1618772404,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PSGRADE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK128/mandarin/PSGRADE.pdf), [Russian](https://www.codechef.com/download/translated/COOK128/russian/PSGRADE.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK128/bengali/PSGRADE.pdf) as well.

Recently, Chef's College Examination has concluded. He was enrolled in $3$ courses and he scored $A, B, C$ in them, respectively. To pass the semester, he must score at least $A_{min}, B_{min}, C_{min}$ marks in the respective subjects along with a cumulative score of at least $T_{min}$, i.e, $A + B + C \ge T_{min}$.

Given seven integers $A_{min}, B_{min}, C_{min}, T_{min}, A, B, C$, tell whether Chef passes the semester or not.

###Input:

- The first line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single line of input, seven integers $A_{min}, B_{min}, C_{min}, T_{min}, A, B, C$ each separated by aspace.

###Output:
Output in a single line, the answer, which should be "YES" if Chef passes the semester and "NO" if not.

You may print each character of the string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

###Constraints 
- $1 \leq T \leq 100$
- $1 \leq A_{min}, B_{min}, C_{min}, A, B, C \leq 100$
- $A_{min} + B_{min} + C_{min} \leq T_{min} \leq 300$

###Sample Input:
```
5
1 1 1 300 2 2 2
3 2 2 6 2 2 2
2 3 2 6 2 2 2
2 2 3 6 2 2 2
100 100 100 300 100 100 100
```

###Sample Output:
```
NO
NO
NO
NO
YES
```
	
###Explanation:
**TestCase 1:** Chef is passing in all the subjects individually but his total score ($2 + 2 + 2 = 6$) is much below the required threshold of $300$ marks. So Chef doesn't pass the semester.

**TestCase 2:** Chef's score in the first subject is less than the threshold, so he doesn't pass the semester.

**TestCase 3:** Chef's score in the second subject is less than the threshold, so he doesn't pass the semester.

**TestCase 4:** Chef's score in the third subject is less than the threshold, so he doesn't pass the semester.

**TestCase 5:** Chef is passing in all the subjects individually and also his total score is equal to the required threshold of $300$ marks. So Chef passes the semester.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>