---
{"category_name":"medium","problem_code":"ALFRED","problem_name":"Almost Friends","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sidhant007","problem_tester":null,"date_added":"21-12-2018","tags":{"0":"sidhant007"},"time":{"view_start_date":1546074900,"submit_start_date":1546074900,"visible_start_date":1546074900,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>There are $N$ kids labeled $1$, $2$, ..., $N$ sitting in a circle such that $1$ and $N$ are adjacent to each other. $i^{th}$ kid has $A_i$ chocolates with him. Also, kids sitting adjacent have **almost** the same number of chocolates, so that they don't fight with each other.
2 kids, having $A_x$ and $A_y$ chocolates each, are said to have **almost** same number of chocolates if $| A_x - A_y | \leq 1$. Less formally, they have **almost** the same number of chocolates if the absolute difference is at most 1.

Since they are sitting in a circle, distance between two kids sitting at $i^{th}$ and $j^{th}$ position, is defined to be $min(|i - j|, N - |i - j|)$

You are not provided with the number of chocolates that each kid has. Instead, you can make queries. In a single query, you can ask the number of chocolates a specific kid has. You need to find a pair of 2 kids with *almost* the same number of chocolates. There would be many such pairs of kids, and so, you have to find a pair such that the distance between them is maximized. If there are still multiple pairs, you can print any of them.

You are allowed to query at most 40 times.

###Input and Output:
You can interact with the judge using the standard input and output.

The first line contains a single integer $N$, denoting the number of kids sitting in the circle.

You need to print to the standard output, for the operations you wish to perform. There are two types of operations:

- In the first type, you are asking the judge the number of chocolates a specific kid has. You need to print a line with $1$ $X$, where $X$ denotes the position of the kid you are querying. 
The judge will return a single integer by printing the integer in the standard input. It will be in the format $Y$, where $Y = A_x$, i.e $Y$ is the number of chocolates the $X^{th}$ kid has.

- In the second type, you are telling the judge the answer. For each test case, you should perform this operation exactly once at the end. This operation is not taken into account when counting the number of queries done. You will print the answer to the standard output in the format $2$ $A$ $B$, where $A$ and $B$ are the positions of the 2 kids which have **almost** the same number of chocolates and which are farthest apart.

###Note:
**Don't forget to flush the standard output after printing each line. It can be done using fflush(stdout) in C/C++, System.out.flush() in Java and sys.stdout.flush() in Python.**

If you exceed 40 queries OR the $X$ given in a query does not satisfy the inequality $1 \leq X \leq N$, OR the $A, B$ in the second type of query doesn't satisfy the inequality $1 \leq A, B \leq N$, then your program will get the verdict Wrong Answer.

###Constraints:
- $N$ is even
- $2 \leq N \leq 10^5$
- $0 \leq A_i \leq 10^9$, for all $i$

###Sample Input and Output:
```
Input / Judge Feedback           Your output / Your query
8
                                                    1 1
3
                                                    1 2
4
                                                    1 3
5
                                                    1 4
5
                                                    1 5
5
                                                    1 6
4
                                                    1 7
3
                                                    1 8
2
                                                    2 2 6
```

###EXPLANATION:
We get that $A = [3, 4, 5, 5, 5, 4, 3, 2]$. The answer could be $2^{nd}$ person (having $4$ chocolates) and $6^{th}$ person (having $4$ chocolates), the distance between $2^{nd}$ and $6^{th}$ person is $min(|2 - 6|, 8 - |2 - 6|) = 4$, which you can check is the maximum valid answer possible.