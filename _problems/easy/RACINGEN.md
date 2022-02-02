---
{"category_name":"easy","problem_code":"RACINGEN","problem_name":"Racing","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n60 3 5\r\n60 3 4","output":"YES\r\nNO","explanation":"**Example case 1:** Ann can run during the first, third and fifth minute. There are other possible solutions.\r\n\r\n**Example case 2:** It is not possible for Ann to finish the race within four minutes.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/mxR6JApNmlM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"minh2345","problem_tester":"","date_added":"2-01-2021","tags":{"0":"easy","1":"ltime94","2":"minh2345"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/RACINGEN","time":{"view_start_date":1616864402,"submit_start_date":1616864402,"visible_start_date":1616864402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RACINGEN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Russian](https://www.codechef.com/download/translated/LTIME94/russian/RACINGEN.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME94/bengali/RACINGEN.pdf), and [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME94/mandarin/RACINGEN.pdf) as well.

Ann is going to take part in a race. At the start, she has $X$ units of energy. For each subsequent **second**, she can decide to run or to rest (she must perform the chosen action during the whole second). If she runs, she loses one unit of energy during that second and if she rests, she gains one unit of energy during that second. However, if Ann decides to rest when she has $X$ units of energy, she does not gain any extra energy. Naturally, she cannot decide to run if she has $0$ units of energy.

Ann needs to run for $R$ **minutes** to reach the goal and she needs to reach it within $M$ **minutes**. Is Ann able to finish the race on time?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $X$, $R$ and $M$.

### Output
For each test case, print a single line containing the string `"YES"` if Ann is able to finish the race or `"NO"` otherwise (without quotes).
 
### Constraints
- $1 \le T \le 10^5$
- $1 \le X,R,M \le 10^9$
 
### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
60 3 5
60 3 4
```

### Example Output
```
YES
NO
```

### Explanation
**Example case 1:** Ann can run during the first, third and fifth minute. There are other possible solutions.

**Example case 2:** It is not possible for Ann to finish the race within four minutes.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>