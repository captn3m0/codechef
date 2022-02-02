---
{"category_name":"school","problem_code":"SPLST","problem_name":"Split Stones","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"fekete","problem_tester":null,"date_added":"25-07-2018","tags":{"0":"cakewalk","1":"fekete","2":"fekete","3":"likecs","4":"ltime62"},"editorial_url":"https://discuss.codechef.com/problems/SPLST","time":{"view_start_date":1532797200,"submit_start_date":1532797200,"visible_start_date":1532797200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/LTIME62/hindi/SPLST.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/LTIME62/mandarin/SPLST.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/LTIME62/russian/SPLST.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/LTIME62/vietnamese/SPLST.pdf" target="_blank">Vietnamese</a> as well.</h3>


There are three piles of stones. The first pile contains $a$ stones, the second pile contains $b$ stones and the third pile contains $c$ stones. You must choose one of the piles and split the stones from it to the other two piles; specifically, if the chosen pile initially contained $s$ stones, you should choose an integer $k$ ($0 \le k \le s$), move $k$ stones from the chosen pile onto one of the remaining two piles and $s-k$ stones onto the other remaining pile. Determine if it is possible for the two remaining piles (in any order) to contain $x$ stones and $y$ stones respectively after performing this action.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains five space-separated integers $a$, $b$, $c$, $x$ and $y$.

### Output
For each test case, print a single line containing the string "YES" if it is possible to obtain piles of the given sizes or "NO" if it is impossible.

### Constraints 
- $1 \le T \le 100$
- $1 \le a, b, c, x, y \le 10^9$

### Subtasks
**Subtask #1 (20 points):** $1 \le a, b, c, x, y \le 100$

**Subtask #2 (80 points):** original constraints

### Example Input
```
4
1 2 3 2 4
3 2 5 6 5
2 4 2 6 2
6 5 2 12 1
```

### Example Output
```
YES
NO
YES
NO
```

### Explanation
**Example case 1:** You can take the two stones on the second pile, put one of them on the first pile and the other one on the third pile.

**Example case 2:** You do not have enough stones.

**Example case 3:** You can choose the first pile and put all stones from it on the second pile.