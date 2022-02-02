---
{"category_name":"easy","problem_code":"MAKPERM","problem_name":"Make a Permutation","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"21-09-2018","tags":{"0":"cook98","1":"kingofnumbers","2":"observations","3":"permutation","4":"simple","5":"taran_1407"},"time":{"view_start_date":1537727402,"submit_start_date":1537727402,"visible_start_date":1537727402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Bengali](http://www.codechef.com/download/translated/COOK98/bengali/MAKPERM.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/COOK98/mandarin/MAKPERM.pdf) , [Russian](http://www.codechef.com/download/translated/COOK98/russian/MAKPERM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK98/vietnamese/MAKPERM.pdf) as well.

You are given an integer sequence $A$ with length $N$. In one move, you are allowed to choose one element of this sequence and change it to an arbitrary integer. Compute the minimum number of moves needed to make the sequence a permutation of the integers $1$ through $N$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing one integer — the minimum required number of moves.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 10^5$
- the sum of $N$ for all test cases does not exceed $2 \cdot 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$

### Example Input
```
2
4
1 2 3 3
3
2 6 2
```

### Example Output
```
1
2
```

### Explanation
**Example case 1:** One possible way is to change the last element to $4$. This creates the sequence $1, 2, 3, 4$, which is a permutation.

**Example case 2:** We can change the first element to $1$ and the second element to $3$, creating the permutation $1, 3, 2$.
