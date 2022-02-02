---
{"category_name":"easy","problem_code":"OPPOSITE","problem_name":"Opposite Cites","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"28-09-2018","tags":{"0":"ad","1":"easy","2":"kingofnumbers","3":"ltime64","4":"observations","5":"proof","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/OPPOSITE","time":{"view_start_date":1538240402,"submit_start_date":1538240402,"visible_start_date":1538240402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Bengali](http://www.codechef.com/download/translated/LTIME64/bengali/OPPOSITE.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/LTIME64/mandarin/OPPOSITE.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME64/russian/OPPOSITE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME64/vietnamese/OPPOSITE.pdf) as well.


There are $N$ cities on a circle, numbered $1$ through $N$. For each $i$ ($1 \le i \le N-1$), cities $i$ and $i+1$ are directly connected by a bidirectional road with length $A_i$, and cities $N$ and $1$ are also directly connected by a bidirectional road with length $A_N$. However, we do not know the lengths of some roads.

For each city $i$, we do know that it has an *opposite city* — formally, there is a city $j \neq i$ such that the clockwise distance between cities $i$ and $j$ is equal to the counterclockwise distance between these cities.

Please find the lengths of all roads in such a way that the above condition is satisfied and the sum of lengths of all roads is minimised.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$. For each valid $i$, $A_i = -1$ denotes that the length of road $i$ is unknown.

### Output
For each test case, print a line containing the string `"NO"` if there is no solution or `"YES"` otherwise. If a solution exists, print a second line containing $N$ space-separated positive integers — the lengths of all roads in your solution. Each of these integers should be $\le 10^9$. If there are multiple solutions, you may print any one.

### Constraints 
- $1 \le T \le 100$
- $3 \le N \le 10^5$
- $1 \le A_i \le 10^9$ or $A_i = -1$ for each valid $i$
- the sum of $N$ for all test cases does not exceed $3\cdot 10^5$

###Subtasks
**Subtask #1 (10 points):** $N \le 4$

**Subtask #2 (20 points):** $A_i = \pm 1$ for each valid $i$

**Subtask #3 (70 points):** original constraints

### Example Input
```
4
4
1 1 1 1
4
1 1 1 2
4
1 -1 -1 4
4
1 -1 2 -1
```

### Example Output
```
YES
1 1 1 1
NO
YES
1 4 1 4
NO
```
