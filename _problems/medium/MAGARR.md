---
{"category_name":"medium","problem_code":"MAGARR","problem_name":"Magic Array","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"smelskiy","problem_tester":null,"date_added":"26-01-2019","tags":{"0":"implementation","1":"medium","2":"observations","3":"smelskiy","4":"snckfl19"},"editorial_url":"https://discuss.codechef.com/problems/MAGARR","time":{"view_start_date":1550311200,"submit_start_date":1550311200,"visible_start_date":1550311200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/SNCKFL19/hindi/MAGARR.pdf), [Bengali](http://www.codechef.com/download/translated/SNCKFL19/bengali/MAGARR.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL19/mandarin/MAGARR.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL19/russian/MAGARR.pdf), and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL19/vietnamese/MAGARR.pdf) as well.

Sonya loves problems with sequences, so she has a large collection of different sequences at home. Some of these sequences are magic sequences.

A *magic sequence* with length $N$ is an integer sequence $s_1, s_2, \ldots, s_N$ with the following properties:
- At least one of its elements is $0$.
- For each valid $i$, $s_i$ is the distance of element $s_i$ to the closest zero element. Formally, $s_i$ is the minimum of $|j-i|$ over all valid indices $j$ such that $s_j = 0$. Note that this definition is self-consistent: if we fix the positions of all zeroes in the sequence, it does not require any of these elements to be non-zero or any other elements to be zero.

For example, $[0, 1, 2, 1, 0]$, $[2, 1, 0, 1, 0, 0]$ and $[2, 1, 0, 1, 2]$ are magic sequences, but $[1, 1, 0]$, $[1]$ and $[1, 2, 0, 2]$ are not.

Danya decided to determine how well Sonya is familiar with magic sequences, so he asked her a question. In this question, Danya gave Sonya a sequence $a_1, a_2, \ldots, a_N$. Sonya must determine whether it is possible to rearrange (permute) the elements of this sequence in such a way that the resulting sequence is a magic sequence. If it is possible, she also needs to find one such resulting sequence.

Since Sonya needs to take care of her sequences, she asks you to answer Danya's question.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case:
- If there is no solution, print a single line containing the string `"No"` (without quotes).
- Otherwise, print two lines. The first of these lines should contain the string `"Yes"` (without quotes). The second line should contain $N$ space-separated integers — a permutation of $a_1, a_2, \ldots, a_N$ which forms a magic sequence. If there are multiple possible solutions, print any of them. 

### Constraints
- $1 \le T \le 3$
- $1 \le N \le 10^4$
- $0 \le a_i \le N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^4$

### Example Input
```
3
4
1 2 1 1
8
5 0 4 1 0 2 3 1
11
0 1 1 2 0 3 1 2 0 2 1
```

### Example Output
```
No
Yes
0 1 0 1 2 3 4 5
Yes
0 1 2 3 2 1 0 1 2 1 0
```
