---
{"category_name":"easy","problem_code":"MININS","problem_name":"Minimum Insertions","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5\r\n3 6 4 5 9","output":"3 1 1 0","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/GQFEp2h0Xqo","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"smartnj","problem_tester":"","date_added":"7-09-2020","tags":{"0":"amortized","1":"cook122","2":"easy","3":"observation","4":"rahuldugar","5":"rishup_nitdgp","6":"smartnj","7":"smartnj"},"problem_difficulty_level":"Easy","best_tag":"Amortized Analysis","editorial_url":"https://discuss.codechef.com/problems/MININS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MININS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK122/hindi/MININS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK122/mandarin/MININS.pdf), [Russian](https://www.codechef.com/download/translated/COOK122/russian/MININS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK122/vietnamese/MININS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK122/bengali/MININS.pdf) as well.

You are given a sequence of integers $A_1, A_2, \ldots, A_N$. This sequence is circular ― for each valid $i$, the element $A_{i+1}$ follows after $A_i$, and the element $A_1$ follows after $A_N$.

You may insert any positive integers at any positions you choose in this sequence; let's denote the resulting sequence by $B$. This sequence is also circular. For each pair of its elements $B_s$ and $B_f$, let's denote the (non-circular) sequence created by starting at $B_s$ and moving from each element to the one that follows after it, until we reach $B_f$, by $B(s, f)$. This sequence includes the elements $B_s$ and $B_f$.

For each $K$ from $2$ to $N$ inclusive, find the smallest possible number of elements that need to be inserted into $A$ to form a sequence $B$ for which there is no subsequence $B(p, q)$ such that:
- The size of $B(p, q)$ is at least $K$.
- There is no pair of consecutive elements in $B(p, q)$ such that their GCD is equal to $1$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing $N-1$ space-separated integers. For each $i$ ($1 \le i \le N-1$), the $i$-th of these integers should be the smallest number of inserted elements in a valid sequence $B$ for $K = i+1$.

### Constraints
- $1 \le T \le 2,000$
- $2 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^6$

### Example Input
```
1
5
3 6 4 5 9
```

### Example Output
```
3 1 1 0
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>