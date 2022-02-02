---
{"category_name":"medium","problem_code":"SPECTAC","problem_name":"Spectacular Activity Selection","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"andrei1998","problem_tester":null,"date_added":"2-11-2018","tags":{"0":"activity","1":"andrei1998","2":"combinatorics","3":"dynamic","4":"greedy","5":"medium","6":"snckpe19","7":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/SPECTAC","time":{"view_start_date":1541269800,"submit_start_date":1541269800,"visible_start_date":1541269800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Russian](http://www.codechef.com/download/translated/S19PETST/russian/SPECTAC.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19PETST/vietnamese/SPECTAC.pdf), [Hindi](http://www.codechef.com/download/translated/S19PETST/hindi/SPECTAC.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S19PETST/mandarin/SPECTAC.pdf) and [Bengali](http://www.codechef.com/download/translated/S19PETST/bengali/SPECTAC.pdf) as well.

In between cooking lunch and dinner, Chef has decided to take some time off to read about the [Activity Selection Problem] (https://en.wikipedia.org/wiki/Activity_selection_problem). In that problem, there are $M$ time intervals $[l_1, r_1], [l_2, r_2], \ldots, [l_M, r_M]$. A solution to the problem is a maximum subset of these intervals such that no two intervals from this subset have a common point (sharing an endpoint is also forbidden), i.e. a set containing the maximum possible number of such intervals.

Since solving this problem proved to be too easy, Chef is now wondering: in how many ways could he pick a set of $M$ distinct intervals such that all of their endpoints belong to the set $\{1, 2, \ldots, N\}$ and the number of intervals in the solution to the Activity Selection Problem for this set is exactly $K$? Since the result may be very large, compute it modulo $MOD$.

### Input
The first and only line of the input contains four space-separated integers $N$, $M$, $K$ and $MOD$.

### Output
Print a single line containing one integer — the number of sets of intervals which satisfy all constraints, modulo $MOD$.

### Constraints
- $1 \le K \le N \le 50$
- $1 \le M \le \mathrm{min}(50, N(N + 1)/2)$
- $100 \le MOD \le 10^9 + 7$
- $MOD$ is a prime

### Example Input
```
2 2 1 997
```

### Example Output
```
2
```

### Explanation
There are exactly two possible ways to pick the intervals:
- $[1, 1]$ and $[1, 2]$
- $[2, 2]$ and $[1, 2]$

### Example Input
```
2 2 2 997
```

### Example Output
```
1
```

### Explanation
We must pick intervals $[1, 1]$ and $[2, 2]$.

### Example Input
```
30 25 20 997
```

### Example Output
```
687
```
