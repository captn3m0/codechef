---
{"category_name":"easy","problem_code":"BJUDGE","problem_name":"Biased Judgement","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"28-09-2018","tags":{"0":"ad","1":"data","2":"easy","3":"implementation","4":"kingofnumbers","5":"ltime64","6":"observations","7":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/BJUDGE","time":{"view_start_date":1538240402,"submit_start_date":1538240402,"visible_start_date":1538240402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Bengali](http://www.codechef.com/download/translated/LTIME64/bengali/BJUDGE.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/LTIME64/mandarin/BJUDGE.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME64/russian/BJUDGE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME64/vietnamese/BJUDGE.pdf) as well.


There is a programming contest held by ShareChat. According to the contest rules, submissions do not receive any feedback until the end of the contest. The judges wanted to benefit from this fact to make their favourite contestants win the contest.

In one of the problems, there were a total of $N$ submissions (numbered $1$ through $N$) received. The judges prepared a total of $M$ tests (numbered $1$ through $M$) for this problem. For each submission $i$ and each test $j$, we know that the time this submission ran on this test is $A_{i, j}$ and whether it produced a correct answer or not.

The judges can still decide the time limit for this problem. For each submission, they have decided whether they wanted it to pass all the tests or not. You are given an integer sequence $D_1, D_2, \dots, D_N$; $D_i = 1$ denotes that submission $i$ should pass all tests and $D_i = 0$ denotes that it should fail on at least one test, either by exceeding the time limit (getting TLE) or producing an incorrect answer (getting WA).

Now, the judges want to decide the time limit of the problem and the subset of tests they should use so that each submission gets the desired verdict (passes or fails).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$. 
- The second line contains $N$ space-separated integers $D_1, D_2, \dots, D_N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains $M$ space-separated integers $A_{i, 1}, A_{i, 2}, \dots, A_{i, M}$.
- $N$ more lines follow. For each valid $i$, the $i$-th of these lines contains $M$ space-separated integers $B_{i, 1}, B_{i, 2}, \dots, B_{i, M}$. Here, $B_{i, j} = 1$ denotes that submission $i$ produced a correct answer on test $j$ and $B_{i, j} = 0$ denotes that it did not.

### Output
For each test case, print a line containing the string `"NO"` if it is impossible to find a solution or `"YES"` otherwise. If a solution exists, print two more lines. The first of these lines should contain two space-separated integers $T$ (the time limit, $1 \le T \le 10^9$) and $K$ (the number of tests chosen). The last line should contain $K$ space-separated integers denoting the indices of the chosen tests.

### Constraints 
- $1 \le T \le 20$
- $1 \le N \le 1,000$
- $1 \le M \le 1,000$
- the sum of $N$ for all test cases does not exceed $1,000$
- the sum of $M$ for all test cases does not exceed $1,000$
- $1 \le A_{i, j} \le 10^8$ for each valid $i, j$

### Subtasks
**Subtask #1 (30 points):**
- $N \le 15$
- $M \le 15$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
3 4
1 1 1
5 7 4 10
7 4 7 20
1 6 3 7
1 1 1 0
0 1 1 1
0 1 1 1
2 2
1 0
7 8
4 5
1 0
1 0
```

### Example Output
```
YES
10 2
2 3
NO
```
