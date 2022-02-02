---
{"category_name":"medium","problem_code":"EXUNE","problem_name":"Anay and Polynomial","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"karnikanay","problem_tester":null,"date_added":"27-09-2019","tags":{"0":"combinatorics","1":"exponentiation","2":"expp2019","3":"karnikanay","4":"modulo"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EXUNE","time":{"view_start_date":1571142600,"submit_start_date":1571142600,"visible_start_date":1571142600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXUNE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Let $P$ be a polynomial in $n$ variables given by:

$$
P(x_1, x_2, \ldots,x_{n}) = (k + x_1 + x_2 + \cdots + x_{n})^{m}
$$

Here $n$, $k$ and $m$ are positive integers. Find the sum of all coefficients of the terms of the polynomial which have even powers in each of the $n$ variables and output it modulo $10^9 + 7$.

Note that the constant term's coefficient is also included in the sum. Please see the sample IO and Explanation for details.

###Input:

- First line will contain the number of testcases $T$
- Each testcase will consist of single line with $3$ positive integers $n$, $k$ and $m$ in that order

###Output:
Output a single line containing the required sum modulo $1000000007$ for each testcase.

###Constraints 
- $1 \leq T \leq 10^3$
- $1 \leq n \leq 10^5$
- $1 \leq k \leq 10^6$
- $1 \leq m \leq 10^6$
- Sum of $n$ over all testcases $\leq 10^5$

###Subtasks
- 30 points : $n = 1$
- 70 points : original constraints

###Sample Input:
```
3
2 1 2
3 3 2
2 5 4
```

###Sample Output:
```
3
12
933
```

###Explanation:
- For the first testcase, the given polynomial is $(1 + x_1 + x_2)^2$ which can be expanded as: $$1 + x_1^2 + x_2^2 + 2x_1 + 2x_2 + 2x_1x_2$$
The terms with even power in all variables are $1$, $x_1^2$ and $x_2^2$. The sum of their coefficients is $1 + 1 + 1 = 3$.
- For the second testcase, the given polynomial is $(3+x_1+x_2+x_3)^2$ which can be expanded as: $$2x_1x_2+2x_1x_3+6x_1+x_1^2+6x_2+x_2^2+6x_3+2x_2x_3+x_3^2+9$$
The terms with even power in all variables are $x_1^2$, $x_2^2$, $x_3^2$ and $9$. The sum of their coefficients is $1 + 1 + 1  + 9 = 12$.
- For the third testcase, the given polynomial is $(5 + x_1 + x_2)^4$ which can be expanded as: $$625+500x_1+150x_1^2+20x_1^3+x_1^4+500x_2+300x_1x_2+60x_1^2x_2+4x_1^3
 x_2+150x_2^2+60x_1x_2^2+6x_1^2x_2^2+20x_2^3+4x_1x_2^3+x_2^4$$
The terms with even power in all variables are $625$, $150x_1^2$, $x_1^4$, $150x_2^2$, $6x_1^2x_2^2$ and $x_2^4$. The sum of their coefficients is $625 + 150 + 1 + 150 + 6 + 1 = 933$
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>