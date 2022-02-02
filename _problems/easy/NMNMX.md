---
{"category_name":"easy","problem_code":"NMNMX","problem_name":"No Minimum No Maximum","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"shubhscoder","problem_tester":null,"date_added":"30-06-2018","tags":{"0":"easy","1":"july18","2":"shubhscoder"},"editorial_url":"https://discuss.codechef.com/problems/NMNMX","time":{"view_start_date":1531733410,"submit_start_date":1531733410,"visible_start_date":1531733410,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/mandarin/NMNMX.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/russian/NMNMX.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/vietnamese/NMNMX.pdf">Vietnamese</a> as well.</h3>



Maheshmati and Sangu are playing a game. First, Maheshmati gives Sangu a sequence of $N$ distinct integers $a_1, a_2, \dots, a_N$ (not necessarily sorted) and an integer $K$. Sangu has to create all subsequences of this sequence with length $K$. For each subsequence, he has to write down the product of $K-2$ integers: all elements of this subsequence except the minimum and maximum element.

Sangu wins the game if he is able to write down all these numbers and tell Maheshmati their product (modulo $10^9+7$, since it can be very large). However, Sangu is a very lazy child and thus wants you to help him win this game. Compute the number Sangu should tell Maheshmati!

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $a_1, a_2, \dots, a_N$.

### Output
For each test case, print a single line containing one integer — the product of all numbers written down by Sangu modulo $10^9+7$.

### Constraints 
- $1 \le T \le 10$
- $3 \le N \le 5,000$
- $3 \le K \le N$
- $1 \le a_i \le 10,000$ for each valid $i$
- the numbers $a_1, a_2, \dots, a_N$ are pairwise distinct

### Subtasks
**Subtask #1 (20 points):** $1 \le N \le 10$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
4 3 
1 2 3 4 
```

### Example Output
```
36
```

### Explanation
**Example case 1:** There are four possible subsequences:
- $[1, 2, 3]$ (Sangu should write down $2$.)
- $[1, 3, 4]$ (Sangu should write down $3$.)
- $[1, 2, 4]$ (Sangu should write down $2$.)
- $[2, 3, 4]$ (Sangu should write down $3$.)

The required product is $2 \cdot 3 \cdot 2 \cdot 3 = 36$.
