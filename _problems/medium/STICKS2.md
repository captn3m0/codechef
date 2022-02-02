---
{"category_name":"medium","problem_code":"STICKS2","problem_name":"Sticks","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"29-05-2017","tags":{"0":"binary","1":"cook96","2":"implementation","3":"kingofnumbers","4":"logic"},"editorial_url":"https://discuss.codechef.com/problems/STICKS2","time":{"view_start_date":1532284205,"submit_start_date":1532284205,"visible_start_date":1532284205,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK96/mandarin/STICKS2.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK96/russian/STICK2.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK96/vietnamese/STICKS2.pdf" target="_blank">Vietnamese</a> as well.</h3>


Chef and his little brother are playing with sticks. Initially, Chef has $N$ sticks with lengths $A_1, A_2, \dots, A_N$. He should give his little brother at least $K$ of these sticks. Afterwards, Chef's brother should choose four sticks and use them to form a rectangle (a square is also a rectangle). Chef does not want his brother to break any of the sticks, so each of the chosen sticks should be one side of the rectangle.

Chef's little brother wants the rectangle he makes to have the maximum possible area, while Chef wants it to have the minimum possible area. Therefore, Chef wants to choose the sticks to give his brother in such a way that they cannot be used to form a rectangle; if it's impossible, then he wants to choose the sticks in such a way that the maximum area of a rectangle his little brother can form is minimum possible.

Can you find the area of the resulting rectangle (or determine that it won't be possible to form any) if both Chef and his little brother play optimally?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing one integer — the area of the resulting rectangle or $-1$ if Chef can give his brother sticks that cannot be used to form any rectangle.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 10^5$
- $0 \le K \le N$
- the sum of $N$ over all test cases does not exceed $10^5$
- $1 \le A_i \le 10^9$ for each valid $i$

### Example Input
```
2
7 6
1 2 3 1 2 2 1
5 4
1 2 1 2 3
```

### Example Output
```
2
-1
```

### Explanation
**Example case 1:** Chef should give his brother all sticks except one. Regardless of the length of that one stick, Chef's brother can choose sticks with lengths $1, 2, 1, 2$ to create a rectangle with area $1 \cdot 2 = 2$.

**Example case 2:** If Chef gives his brother sticks with lengths $2, 1, 2, 3$, then there is no way to form a rectangle.
