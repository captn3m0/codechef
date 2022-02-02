---
{"category_name":"easy","problem_code":"MARCAPS","problem_name":"Markers and Caps","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"17-03-2019","tags":{"0":"ad","1":"cook104","2":"easy","3":"erfaniaa"},"editorial_url":"https://discuss.codechef.com/problems/MARCAPS","time":{"view_start_date":1553452200,"submit_start_date":1553452200,"visible_start_date":1553452200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK104/hindi/MARCAPS.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK104/mandarin/MARCAPS.pdf), [Russian](http://www.codechef.com/download/translated/COOK104/russian/MARCAPS.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK104/vietnamese/MARCAPS.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK104/bengali/MARCAPS.pdf) as well.

Chef has $N$ markers. There is a cap on each marker. For each valid $i$, the $i$-th marker has colour $a_i$. Initially, for each valid $i$, the colour of the cap on the $i$-th marker is also $a_i$.

Chef wants to rearrange the caps in such a way that no marker has the same colour as its cap. (Obviously, each marker must have exactly one cap.) Can he do that? If he can, find one such way to rearrange the caps. If there are multiple solutions, you may find any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
- For each test case:
    - If Chef cannot successfully rearrange the caps, print a single line containing the string `"No"` (without quotes).
    - Otherwise, print two lines. The first line should contain the string `"Yes"` (without quotes). The second line should contain $N$ space-separated integers describing a valid rearrangement of caps. For each valid $i$, the $i$-th of these integers should denote the final colour of the cap on the $i$-th marker.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le a_i \le 10^9$ for each valid $i$

### Example Input
```
2
9
1 1 1 2 2 2 3 3 3
2
1 1
```

### Example Output
```
Yes
2 2 2 3 3 3 1 1 1
No
```
