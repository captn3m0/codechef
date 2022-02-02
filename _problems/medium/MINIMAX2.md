---
{"category_name":"medium","problem_code":"MINIMAX2","problem_name":"Game of Theory","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":3.5,"source_sizelimit":50000,"problem_author":"aashu_k","problem_tester":null,"date_added":"31-03-2019","tags":{"0":"aashu_k"},"time":{"view_start_date":1554669000,"submit_start_date":1554669000,"visible_start_date":1554669000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Tyrion is learning game theory to impress the queen.Lord Varys wanted to test the learning of Tyrion so he presented him with a problem on min-max. Help Tyrion in solving the problem.

Given a tree with $N$ nodes rooted at node $1$. Each node ($U$) of the tree is associated with a pair of values $(A_U, B_U)$. You need to find the value of result ($R$).


$
\\
R \qquad = \qquad \displaystyle\sum\limits_{U=1}^{N}\displaystyle\sum\limits_{V=1}^{N} F(U, V) \\
$

$
F(U,V) = \left\{\begin{matrix}
 MIN( MAX(A_U, A_V), MAX(B_U, B_V) ) &  if\, V\, lies\, in\, subtree\, of\, U  \\
0 & otherwise
\end{matrix}\right.
$

###Input:

- First line will contain one integer $N$ denoting number of nodes in the tree.
- Second line will contain $N$ space separated integers $A_1, A_2, A_3 ...... A_N$.
- Third line will contain $N$ space separated integers $B_1, B_2, B_3 ...... B_N$.
- Each of the next $N - 1$ lines will contain 2 space separated integers $U$ and $V$ denoting that there is an edge between node $U$ and $V$.

###Output:
Output in a single line value of result $R$.

###Constraints 
- $1 \leq N \leq 10^5$
- $1 \leq A[i], B[i] \leq 10^9$
- $1 \leq U, V \leq N$
- $U \ne V$

###Sample Input:
```
5
1 4 5 2 3
5 2 4 1 3
1 2
1 3
2 4
2 5
```

###Sample Output:
```
30
```
###EXPLANATION:
$F(1, 1) = MIN(MAX(A_1, A_1), MAX(B_1, B_1)) = 1$ 
$F(1, 2) = MIN(MAX(A_1, A_2), MAX(B_1, B_2)) = 4$ 
$F(1, 3) = MIN(MAX(A_1, A_3), MAX(B_1, B_3)) = 5$
$F(1, 4) = MIN(MAX(A_1, A_4), MAX(B_1, B_4)) = 2$
$F(1, 5) = MIN(MAX(A_1, A_5), MAX(B_1, B_5)) = 3$
$F(2, 2) = MIN(MAX(A_2, A_2), MAX(B_2, B_2)) = 2$
$F(2, 4) = MIN(MAX(A_2, A_4), MAX(B_2, B_4)) = 2$
$F(2, 5) = MIN(MAX(A_2, A_5), MAX(B_2, B_5)) = 3$
$F(3, 3) = MIN(MAX(A_3, A_3), MAX(B_3, B_3)) = 4$
$F(4, 4) = MIN(MAX(A_4, A_4), MAX(B_4, B_4)) = 1$
$F(5, 5) = MIN(MAX(A_5, A_5), MAX(B_5, B_5)) = 3$

Rest of $F(U, V)$ which are not listed above have value $0$.

$R$ = 1 + 4 + 5 + 2 + 3 + 2 + 2 + 3 + 4 + 1 + 3 = 30

Hence the result is 30.