---
{"category_name":"school","problem_code":"TABLET","problem_name":"Buying New Tablet","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"16-02-2019","tags":{"0":"ad","1":"cakewalk","2":"cook103","3":"implementation","4":"kingofnumbers"},"editorial_url":"https://discuss.codechef.com/problems/TABLET","time":{"view_start_date":1550428202,"submit_start_date":1550428202,"visible_start_date":1550428202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK103/hindi/TABLET.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK103/mandarin/TABLET.pdf), [Russian](http://www.codechef.com/download/translated/COOK103/russian/TABLET.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK103/vietnamese/TABLET.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK103/bengali/TABLET.pdf) as well.

Chef decided to buy a new tablet. His budget is $B$, so he cannot buy a tablet whose price is greater than $B$. Other than that, he only has one criterion — the area of the tablet's screen should be as large as possible. Of course, the screen of a tablet is always a rectangle.

Chef has visited some tablet shops and listed all of his options. In total, there are $N$ available tablets, numbered $1$ through $N$. For each valid $i$, the $i$-th tablet has width $W_i$, height $H_i$ and price $P_i$.

Help Chef choose a tablet which he should buy and find the area of such a tablet's screen, or determine that he cannot buy any tablet.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $B$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains three space-separated integers $W_i$, $H_i$ and $P_i$.

### Output
For each test case, print a single line. If Chef cannot buy any tablet, it should contain the string `"no tablet"` (without quotes). Otherwise, it should contain a single integer — the maximum area of the screen of a tablet Chef can buy.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 100$
- $1 \le B \le 1,000,000$
- $1 \le P_i \le 1,000,000$ for each valid $i$
- $1 \le W_i, H_i \le 10,000$ for each valid $i$

### Example Input
```
3
3 6
3 4 4
5 5 7
5 2 5
2 6
3 6 8
5 4 9
1 10
5 5 10
```

### Example Output
```
12
no tablet
25
```
	
### Explanation
**Example case 1:** The first tablet (with screen area $3 \cdot 4 = 12$) is the best option for Chef, since Chef cannot afford the second one and the third one has a smaller screen.

**Example case 2:** Chef's budget is $6$, but all tablets have higher prices, so Chef cannot buy any tablet.

**Example case 3:** The price of the only tablet is exactly equal to Chef's budget, so he is able to buy it.
