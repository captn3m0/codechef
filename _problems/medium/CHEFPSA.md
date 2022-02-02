---
{"category_name":"medium","problem_code":"CHEFPSA","problem_name":"Chefina and Prefix Suffix Sums","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n1\r\n-1 1\r\n1\r\n0 0\r\n2\r\n4 3 1 4\r\n3\r\n5 3 7 10 5 10","output":"0\r\n1\r\n2\r\n4","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"20-11-2019","tags":{"0":"combinatorics","1":"jan20","2":"math","3":"medium","4":"rishup_nitdgp","5":"rishup_nitdgp","6":"vijju123"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHEFPSA","time":{"view_start_date":1578907800,"submit_start_date":1578907800,"visible_start_date":1578907800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFPSA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN20/hindi/CHEFPSA.pdf), [Bengali](https://www.codechef.com/download/translated/JAN20/bengali/CHEFPSA.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN20/mandarin/CHEFPSA.pdf), [Russian](https://www.codechef.com/download/translated/JAN20/russian/CHEFPSA.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN20/vietnamese/CHEFPSA.pdf) as well.

Chefina likes prefix and suffix sums, so Chef decided to give some to her as her birthday present. He created a sequence $a_1, a_2, \ldots, a_N$ and calculated its prefix sums $pre_1, pre_2, \ldots, pre_N$ (for each valid $i$, $pre_i$ is the sum of the first $i$ elements of $a$) and suffix sums $suf_1, suf_2, \ldots, suf_N$ (for each valid $i$, $suf_i$ is the sum of the last $i$ elements of $a$). He arranged the elements of these sequences in a gift box and went to Chefina's home.

When Chefina opened the gift box, she found out that all the elements got shuffled when Chef was carrying the box. For each element, it is now impossible to determine if it belonged to the sequence $pre$ or $suf$ and what its index in the correct sequence was. The only thing we know is a sequence $x_1, x_2, \ldots, x_{2N}$, which contains all the elements of the sequences $pre$ and $suf$, in no particular order.

Chefina is now curious about the number of initial sequences $a$ which Chef could have chosen, such that it is possible to obtain $x$ by shuffling the prefix and suffix sums of $a$. Help Chefina find this number. Since it could be very large, compute it modulo $1,000,000,007$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $2N$ space-separated integers $x_1, x_2, \ldots, x_{2N}$.

### Output
For each test case, print a single line containing one integer ― the number of possible initial sequences modulo $1,000,000,007$.

### Constraints 
- $1 \le T \le 10^6$
- $1 \le N \le 10^5$
- $|x_i| \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^6$

### Subtasks
**Subtask #1 (20 points):**
- $T \le 10$
- $N \le 10$

**Subtask #2 (80 points):** original constraints

### Example Input
```
4
1
-1 1
1
0 0
2
4 3 1 4
3
5 3 7 10 5 10
```

### Example Output
```
0
1
2
4
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>