---
{"category_name":"medium","problem_code":"CHEFPRTY","problem_name":"Chefina and Dishes","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3 3 1\r\n1 2 3\r\n3\r\n3\r\n1\r\n6 2 1\r\n1 1 1 2 2 2\r\n2\r\n1\r\n4\r\n3\r\n6\r\n5","output":"0\r\n9","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Bqvplp_TDrA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":"","date_added":"15-08-2020","tags":{"0":"cook121","1":"medium","2":"psychik","3":"rishup_nitdgp","4":"rishup_nitdgp","5":"segment","6":"two"},"problem_difficulty_level":"Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/CHEFPRTY","time":{"view_start_date":1598208302,"submit_start_date":1598208302,"visible_start_date":1598208302,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFPRTY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK121/hindi/CHEFPRTY.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK121/mandarin/CHEFPRTY.pdf), [Russian](https://www.codechef.com/download/translated/COOK121/russian/CHEFPRTY.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK121/vietnamese/CHEFPRTY.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK121/bengali/CHEFPRTY.pdf) as well.

There are $N$ chefs (numbered $1$ through $N$) and $M$ dishes (numbered $1$ through $M$). For each valid $i$, the $i$-th chef can cook dishes of exactly one type $F_i$. Also, each chef is a friend of $K$ different chefs.

Whenever some chef cooks a dish, he asks all chefs who either are his friends or know how to cook this dish to evaluate the dish. No chef may evaluate his own dish.

All the chefs are arranged in a row from chef $1$ to chef $N$. Chefina is going to choose two valid integers $L$ and $R$ and allow the chefs $L, L+1, \ldots, R$ to cook their dishes and have them evaluated as described above. She wants to choose $L$ and $R$ in such a way that each of the $N$ chefs evaluates at least one dish. Find the number of such pairs.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $K$.
- The second line contains $N$ space-separated integers $F_1, F_2, \ldots, F_N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $K$ space-separated integers $D_1, D_2, \ldots, D_K$ denoting the friends of the $i$-th chef.

### Output
For each test case, print a single line containing one integer ― the number of pairs such that each chef evaluates at least one dish.

### Constraints
- $1 \le T \le 1,000$
- $1 \le M \le N \le 3 \cdot 10^5$
- $1 \le K \le 3$
- $1 \le F_i \le M$ for each valid $i$
- $1 \le D_i \le N$ for each valid $i$
- $i\space != D_i$ for each valid $i$
- $D_1, D_2, \ldots, D_K$ are pairwise disticnt
- the sum of $N \cdot (K+1)$ over all test cases does not exceed $2 \cdot 10^6$

### Example Input
```
2
3 3 1
1 2 3
3
3
1
6 2 1
1 1 1 2 2 2
2
1
4
3
6
5
```

### Example Output
```
0
9
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>