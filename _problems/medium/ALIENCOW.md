---
{"category_name":"medium","problem_code":"ALIENCOW","problem_name":"Chef and Alien Invasion","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"usaxena95","problem_tester":null,"date_added":"21-12-2018","tags":{"0":"usaxena95"},"time":{"view_start_date":1545503400,"submit_start_date":1545503400,"visible_start_date":1545503400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Chef has a rectangular field of dimensions $N \times M$ which contains grass all over it.  $(0,0)$ is made the bottom left corner of the field. $(N, M)$ is made the top right corner of the field.

Aliens aim to destroy the field by sending a cow on the field which will eat all the grass.

Chef, in order to protect the field constructs $K$ rectangular electric fences. 

An electric fence is represented by $x_1\space  y_1\space x_2\space y_2$. This denotes an electric fence along the perimeter of the rectangle with bottom left corner as $(x_1, y_1)$ and top right corner as $(x_2, y_2)$. The fences can touch or intersect with each other.

The aliens will send the cow to a point $P$ on the field. From that point $P$ the cow will graze all the grass it can reach. The cow is intelligent enough to know that electric fence can kill it. Therefore it will never touch or cross an electric fence. Also the cow will never leave the field.

The aliens can't see the fences from above and thus will send the cow to any point $(x, y)$ (not necessarily integer point) selected uniformly at random on the field. $(0 \le x \le N, 0 \le y \le M)$

Chef asks you to calculate the expected area of grass lost due to this alien invasion. Since the Chef doesn't like floating point numbers he wants you to tell the value of $P \times Q^{-1} \space mod \space 10^9+7$. Here $\frac{P}{Q} = $ expected grass area destroyed with $gcd(P,Q)=1$. Also 
$Q^{-1}$ is the modular multiplicative inverse of $Q$ with respect to $10^9+7$.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase three integers $N, M, K$ denoting the dimensions of field and the number of rectangular electric fences. Then $K$ lines follow.
- Each line contains $4$ integers $x_1\space  y_1\space x_2\space y_2$ denoting the electric fence.

###Output:
For each testcase, output in a single line answer to the problem.

###Constraints 
- $1 \leq T \leq 10$
- $1 \le N,M \le 10^9$
- $0 \le x_1 \le x_2 \le N$
- $0 \le y_1 \le  y_2 \le M$
- $0 \le K \le 20$

###Sample Input:
```
2
10 10 4
0 0 5 5
5 5 10 10
0 5 5 10
5 0 10 5
9 9 2
0 0 9 6
0 3 9 9
```

###Sample Output:
```
25
27
```
	
###EXPLANATION:
**Testcase 1**: The Chef divides the whole field into $4$ equal parts. Therefore $\frac{1}{4}^{th}$ of the field will be grazed by the cow wherever the cow lands. Expected area lost = $\frac{10\times 10}{4} = 25$.

**Testcase 2**: The Chef using 2 fences divides the whole field into $3$ equal parts. Therefore $\frac{1}{3}^{th}$ of the field will be grazed by the cow wherever the cow lands. Expected area lost = $\frac{9\times 9}{3} = 27$

