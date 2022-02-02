---
{"category_name":"easy","problem_code":"FASTFOOD","problem_name":"Fast Food","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"25-04-2019","tags":{"0":"greedy","1":"kingofnumbers","2":"ltime71","3":"partial","4":"simple","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/FASTFOOD","time":{"view_start_date":1556384402,"submit_start_date":1556384402,"visible_start_date":1556384402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/LTIME71/hindi/FASTFOOD.pdf), [Bengali](http://www.codechef.com/download/translated/LTIME71/bengali/FASTFOOD.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME71/mandarin/FASTFOOD.pdf), [Russian](http://www.codechef.com/download/translated/LTIME71/russian/FASTFOOD.pdf), and [Vietnamese](http://www.codechef.com/download/translated/LTIME71/vietnamese/FASTFOOD.pdf) as well.

Chef owns a fast food shop that is currently located in a city called Chefland. He is planning to move his shop to a bigger city called Chefabad. There are $N$ consecutive days (numbered $1$ through $N$) such that the move can be done before day $1$, after day $N$ or between any two consecutive days. Moving the shop takes zero time. Chef wants to time the move in a way thay maximises his profit during these $N$ days.

For each $i$ ($1 \le i \le N$), we know that if Chef's shop is in Chefland on the $i$-th day, he earns $A_i$ coins, while if it is in Chefabad on this day, he earns $B_i$ coins. Find the maximum profit Chef can make if he optimally chooses the time when the shop should move. Note that once the shop has moved to Chefabad, it cannot return to Chefland.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

### Output
For each test case, print a single line containing one integer ― the maximum profit.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $1 \le A_i, B_i \le 10^4$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $1 \le N \le 1,000$
- the sum of $N$ over all test cases does not exceed $10,000$

**Subtask #2 (50 points):** original constraints

### Example Input
```
3
3
2 3 2
10 3 4
4
7 5 3 4
2 3 1 3
2
10 1
1 10
```

### Example Output
```
17
19
20
```

### Explanation
**Example case 1:** The best time to move is before the first day.

**Example case 2:** The best time to move is after the last day.

**Example case 3:** The best time to move is after the first day.
