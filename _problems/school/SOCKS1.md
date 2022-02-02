---
{"category_name":"school","problem_code":"SOCKS1","problem_name":"Valid Pair","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/Z9F5lSSd8Rw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"29-03-2021","tags":{"0":"april21","1":"cakewalk","2":"daanish_adm","3":"implementation"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SOCKS1","time":{"view_start_date":1618219800,"submit_start_date":1618219800,"visible_start_date":1618219800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SOCKS1","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/APRIL21/bengali/SOCKS1.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL21/mandarin/SOCKS1.pdf), [Russian](https://www.codechef.com/download/translated/APRIL21/russian/SOCKS1.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL21/vietnamese/SOCKS1.pdf) as well.

Chef has three socks in his drawer. Each sock has one of $10$ possible colours, which are represented by integers between $1$ and $10$. Specifically, the colours of the socks are $A$, $B$, and $C$.

Chef has to wear two socks which have the same colour. Help Chef find out if that is possible or not.

### Input
The first and only line of the input contains three space-separated integers $A$, $B$ and $C$.

### Output
Print a single line containing the string `"YES"` if it is possible for Chef to wear two socks with the same colour or `"NO"` if it is impossible (without quotes).

You may print each character of each string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

### Constraints
- $1 \leq A, B, C \leq 10$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input 1
```
5 4 3
```

### Example Output 1
```
NO
```
	
### Explanation
Since there are no two socks with the same colour, Chef cannot wear a pair of socks with the same colour.

### Example Input 2
```
5 5 5
```

### Example Output 2
```
YES
```
	
### Explanation
Since all three socks have the same colour, Chef can wear a pair of socks with the same colour.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>