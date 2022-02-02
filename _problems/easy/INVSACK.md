---
{"category_name":"easy","problem_code":"INVSACK","problem_name":"Inverse Knapsack","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sidhant007","problem_tester":null,"date_added":"6-12-2019","tags":{"0":"binary","1":"dynamic","2":"easy","3":"gw19mos","4":"icpc2019","5":"icpcgw19","6":"sidhant007"},"problem_difficulty_level":"Easy","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/INVSACK","time":{"view_start_date":1576781100,"submit_start_date":1576781100,"visible_start_date":1576781100,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=INVSACK","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given $N$ and there exists an array of $N$ items, which only the Chef knows. The i-th item of the array will have a weight ($W_i$) and a profit ($P_i$) value associated with it.

You are allowed to ask the chef the value of $dp[i][j]$, for a given $i, j$ where $dp[i][j]$ denotes the maximum amount of profit you can earn if you pick the best subset of items from the first $i$ items of the array such that the sum of the weights of the picked items doesn't exceed $j$.

Your aim is to determine the weight and profit of each item, i.e recover the $W$ and $P$ array.

You are allowed to query at most $1500$ times.

### Interaction
- The first line of the input contains a single integer $N$, denoting the number of items in the array.
- You need to print to the standard output, for the operations you wish to perform. There are two types of operations:
- In the first type, you are asking the judge the value of $dp[i][j]$. You need to print a single line with $1$ $i$ $j$, where the judge will return a single value by printing the integer in the standard input. It will be the value of $dp[i][j]$.
- In the second type, you are telling the judge the answer. For each test case, you should perform this operation exactly once at the end. This operation is not taken into account when counting the number of queries done.You need to print $3$ lines:
- The first line starts with $2$, denoting the type of query.
- The second line consists of $N$ integers denoting the $W$ weights array in the format $W_1$ $W_2$ $W_3$ $\dots$ $W_N$.
- The third line consists of $N$ integers denoting the $P$ profits array in the format $P_1$ $P_2$ $P_3$ $\dots$ $P_N$.

### Note
**Don't forget to flush the standard output after printing each line. It can be done using fflush(stdout) in C/C++, System.out.flush() in Java and sys.stdout.flush() in Python.**

If you exceed $1500$ queries OR If in the first type of query, $i$ and $j$ don't satisfy the inequalities $1 \leq i \leq N$ and $1 \leq j \leq 10^4$ OR The $W$ and $P$ in the second type of query don't satisfy the inequality $1 \leq W_{i} \leq 100$ and $1 \leq P_{i} \leq 10^6$, for all $i \in [1, N]$ then your program will get the verdict Wrong Answer.

Also note that there is a hidden $W$ and $P$ array and the solution is going to be matched exactly against it, i.e there is a unique solution for each test case.

### Constraints
- $2 \leq N \leq 10^2$
- For each query of first type: $1 \leq i \leq N$ and $1 \leq j \leq 10^4$
- For the query of second type: $1 \leq W_{i} \leq 100$ and $1 \leq P_{i} \leq 10^6$, for all $i \in [1, N]$ 

### Example
```
Judge                                          You
2
                                                    1 1 2
0
                                                    1 1 3
2
                                                    1 2 9
3
                                                    1 2 10
5
                                                    2
                                                    3 7
                                                    2 3
```

### Explanation
We get that $W = [3, 7]$ and $P = [2, 3]$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>