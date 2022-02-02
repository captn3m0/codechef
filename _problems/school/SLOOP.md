---
{"category_name":"school","problem_code":"SLOOP","problem_name":"Coldplay","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n10 5\r\n10 6\r\n9 10","output":"2\r\n1\r\n0","explanation":"- **Test case 1:** Chef listens to the song once from $0 - 5$ minutes and next from $5 - 10$ minutes.\r\n\r\n- **Test case 2:** Chef listens to the song from $0 - 6$ minutes but now he has only $4$ minutes left so he can\u0027t complete the song again.\r\n\r\n- **Test case 3:** Since the song lasts longer than the journey, Chef won\u0027t be able to complete it even once.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/DT1pdUb7fPY","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"25-04-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"ltime95"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SLOOP","time":{"view_start_date":1619802000,"submit_start_date":1619802000,"visible_start_date":1619802000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SLOOP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef is a big fan of Coldplay. Every Sunday, he will drive to a park taking $M$ minutes to reach there, and during the ride he will play a single song on a loop. Today, he has got the latest song which is in total $S$ minutes long. He is interested to know how many times will he be able to play the song completely.

###Input

- The first line contains an integer $T$ - the number of test cases. Then the test cases follow. 
- The only line of each test case contains two space-separated integers $M, S$ - the duration of the trip and the duration of the song, both in minutes.

###Output
For each test case, output in a single line the answer to the problem.

###Constraints 
- $1 \leq T \leq 1000$
- $1 \leq M \leq 100$
- $1 \leq S \leq 10$

###Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input
```
3
10 5
10 6
9 10
```

###Sample Output
```
2
1
0
```
	
###Explanation
- **Test case 1:** Chef listens to the song once from $0 - 5$ minutes and next from $5 - 10$ minutes.

- **Test case 2:** Chef listens to the song from $0 - 6$ minutes but now he has only $4$ minutes left so he can't complete the song again.

- **Test case 3:** Since the song lasts longer than the journey, Chef won't be able to complete it even once.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>