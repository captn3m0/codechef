---
{"category_name":"medium","problem_code":"SEGCOMPR","problem_name":"Compress all Subsegments","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"10  \r\n0 1 2 3 4 5 6 7 8 9","output":160,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"28-09-2020","tags":{"0":"ad","1":"bit","2":"brute","3":"ildar_adm","4":"oct20"},"problem_difficulty_level":"Medium","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/SEGCOMPR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SEGCOMPR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT20/hindi/SEGCOMPR.pdf), [Bengali](https://www.codechef.com/download/translated/OCT20/bengali/SEGCOMPR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT20/mandarin/SEGCOMPR.pdf), [Russian](https://www.codechef.com/download/translated/OCT20/russian/SEGCOMPR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT20/vietnamese/SEGCOMPR.pdf) as well.

For an array $B$, while it has more than one element, you can apply an operation on it - you choose any two elements $x,y$  (they may be the same value, but they should have different indices), delete them, and add an element $g(x, y)$ instead. 

Here $g(x, y)$ denotes the highest set bit in $x \oplus y$, or $0$ if they are equal. In other words, $g(x, y) = \max 2^k$, such that $2^k \leq (x \oplus y)$ for $x \neq y$, and $g(x,y)=0$ if $x = y$. For example, $g(1,1) = 0, g(1,2) = 2, g(2,4)=4, g(13,17)=16$.

Given an array $B$, we try to apply the operations repeatedly in such a way that when we are left with only one element at the end, that element is as small as possible. Let's denote this smallest possible value of the element at the end as $f(B)$.

You are given an array $A$ with $N$ elements, you need to find the sum of $f(A_{l \ldots r})$ among all subsegments $1 \leq l \leq r \leq N$.

The answer may be large, so you need to find it modulo $998\,244\,353$.

###Input:
- The first line contains one integer $N$.
- The second line contains $N$ integers $A_1, A_2, \ldots, A_N$.

###Output:
In a single line, print the sum, modulo $998\,244\,353$.

###Constraints 
- $1 \leq N \leq 300\,000$
- $0 \leq A_i < 2^{30}$

###Subtasks
- 10 points : $1 \leq N \leq 10$
- 10 points : $1 \leq N \leq 500$
- 10 points : $1 \leq N \leq 5000$
- 70 points : $1 \leq N \leq 300\,000$

###Sample Input:
```
10  
0 1 2 3 4 5 6 7 8 9
```

###Sample Output:
```
160
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>