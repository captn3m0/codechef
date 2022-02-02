---
{"category_name":"easy","problem_code":"DIANE","problem_name":"Yet Another Crossover Episode","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/6m8ZqvnTh4Q","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"7-10-2020","tags":{"0":"ad","1":"constructive","2":"cook123","3":"easy","4":"psychik","5":"sjshohag","6":"sjshohag"},"problem_difficulty_level":"Easy-Medium","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/DIANE","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DIANE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK123/hindi/DIANE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK123/mandarin/DIANE.pdf), [Russian](https://www.codechef.com/download/translated/COOK123/russian/DIANE.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK123/vietnamese/DIANE.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK123/bengali/DIANE.pdf) as well.

You are given an integer $D$. Find an integer sequence $A_1, A_2, \ldots, A_N$ such that the following conditions are satisfied:
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^5$ for each valid $i$
- $\sum_{i=1}^N \sum_{j=i}^N \left( \mathrm{min}(A_i, A_{i+1}, \ldots, A_j) - \mathrm{GCD}(A_i, A_{i+1}, \ldots, A_j) \right) = D$

It can be proved that a solution always exists under the given constraints.

Note: $\mathrm{GCD}(B_1, B_2, \ldots, B_M)$ is the greatest integer which divides all the integers $B_1, B_2, \ldots, B_M$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $D$.

### Output
For each test case, print two lines. The first of these lines should contain a single integer $N$. The second line should contain $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

If there are multiple solutions, you may find any one of them.

### Constraints
- $1 \le T \le 10$
- $0 \le D \le 10^9$

### Example Input
```
4
2
5
200
13
```

### Example Output
```
3
3 3 2 
5
2 8 5 1 10 
7
12 10 15 11 19 13 15
4
5 4 4 10 
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>