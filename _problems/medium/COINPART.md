---
{"category_name":"medium","problem_code":"COINPART","problem_name":"Coin Partition","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"29-09-2018","tags":{"0":"dynamic","1":"kingofnumbers","2":"knapsack","3":"ltime64","4":"medium","5":"precomputation","6":"proof","7":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/COINPART","time":{"view_start_date":1538240402,"submit_start_date":1538240402,"visible_start_date":1538240402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Bengali](http://www.codechef.com/download/translated/LTIME64/bengali/COINPART.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/LTIME64/mandarin/COINPART.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME64/russian/COINPART.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME64/vietnamese/COINPART.pdf) as well.

Chef is a cook. He has a son Chefu and a daughter Chefa. He also has $N$ coins, numbered $1$ through $N$; for each valid $i$, the $i$-th coin has value $V_i$.

Chef wants to give all coins to his two children in the following way: He traverses all coins in a particular order; for each coin, he checks which child currently has less money in total and gives this coin to that child (if both have the same amount of money, Chefu is given the coin).

Chefu is studying computer science, so he knows that this method is not necessarily the most fair way of partitioning the coins, but Chef does not understand why, since he is only a cook.

Now, Chefu wants to take advantage of that and choose the order in which Chef should give out the coins in such a way that the amount of money he gets is maximised. Can you help him?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $V_1, V_2, \dots, V_N$.

### Output
For each test case, print a single line containing $N$ space-separated integers — a permutation of numbers $1$ through $N$ denoting the indices of the coins in the order in which Chef should traverse them. If there is more than one optimal solution, you may print any one.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 500$
- $1 \le V_i \le 500$ for each valid $i$
- the sum of $N$ for all test cases does not exceed $500$

### Subtasks
**Subtask #1 (50 points):** the sum of $N$ for all test cases does not exceed $80$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
4
5 3 20 9
4
2 2 2 2
```

### Example Output
```
2 4 1 3
1 2 3 4
```
