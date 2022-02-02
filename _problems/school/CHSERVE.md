---
{"category_name":"school","problem_code":"CHSERVE","problem_name":"Chef and Serves","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"abdul135","problem_tester":null,"date_added":"17-09-2018","tags":{"0":"abdul135","1":"cakewalk","2":"oct18"},"editorial_url":"https://discuss.codechef.com/problems/CHSERVE","time":{"view_start_date":1540027803,"submit_start_date":1540027803,"visible_start_date":1540027803,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/OCT18/hindi/CHSERVE.pdf) ,[Bengali](http://www.codechef.com/download/translated/OCT18/bengali/CHSERVE.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/OCT18/mandarin/CHSERVE.pdf) , [Russian](http://www.codechef.com/download/translated/OCT18/russian/CHSERVE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT18/vietnamese/CHSERVE.pdf) as well.


In a regular table tennis match, the player who serves changes every time after 2 points are scored, regardless of which players scored them.

Chef and Cook are playing a different match — they decided that the player who serves would change every time after $K$ points are scored instead (again regardless of which players scored them). When the game starts, it's Chef's turn to serve.

You are given the current number of points scored by Chef and Cook ($P_1$ and $P_2$ respectively). Find out whether Chef or Cook has to serve next.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $P_1$, $P_2$ and $K$.

### Output
For each test case, print a single line containing the string `"CHEF"` if it is Chef's turn or `"COOK"` if it is Cook's turn.

### Constraints 
- $1 \le T \le 10^5$
- $1 \le K \le 10^{9}$
- $0 \le P_1, P_2 \le 10^{9}$ 

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
1 3 2
0 3 2
34 55 2
```

### Example Output
```
CHEF
COOK
CHEF
```

### Explanation
**Example case 1:** Chef serves for the first two points, Cook serves for the next two, so Chef has to serve again now.
