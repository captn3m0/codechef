---
{"category_name":"hard","problem_code":"TESTGEN","problem_name":"Test Generation","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":null,"date_added":"17-11-2019","tags":{"0":"alex_2oo8"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"","time":{"view_start_date":1624656600,"submit_start_date":1624656600,"visible_start_date":1624656600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TESTGEN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC19/hindi/TESTGEN.pdf), [Bengali](https://www.codechef.com/download/translated/DEC19/bengali/TESTGEN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC19/mandarin/TESTGEN.pdf), [Russian](https://www.codechef.com/download/translated/DEC19/russian/TESTGEN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC19/vietnamese/TESTGEN.pdf) as well.

In [October Long Challenge](https://www.codechef.com/OCT19) Chef set the problem [CNNCT2](https://www.codechef.com/OCT19A/problems/CNNCT2). Its editorial, which you may (or may not) find helpful in this problem, is available [here](https://discuss.codechef.com/t/cnnct2-editorial/40191).

While preparing the problem, Chef struggled with generating strong test cases for it. In fact, he even considered the test generation to be much more challenging than the problem itself, in the end. Now, after two months, Chef decided to turn the test generation process into a problem and here is the result.

Chef created four different randomised solutions that use heuristics. All of them are known to fail on some test cases, but your objective is to find a single test case such that all four solutions fail on it. The implementations of the four heuristics, as well as the implementation of the correct solution, are provided in the source code of the checker (see below). This source code also contains some higher-level descriptions of the heuristics in comments.

### Checker
A C++ implementation of the checker is provided [here](https://www.codechef.com/download/DEC19/checker.cpp). This checker is mostly identical to the one used on the server to judge your submissions. The only differences are in the input, output and in the seed used for the random generator. See the comment at the top of the source code for instructions about how to compile and use the checker.

### Input
This problem has no input (the input is empty).

### Output
The output of your solution should be a valid test case for the problem CNNCT2.
- First, print a line containing two space-separated integers $N$ and $M$.
- Then, print $M$ lines describing the roads in the state A. Each of these lines should contain two space-separated integers $u$ and $v$ denoting that cities $u$ and $v$ in the state A are connected by a road.
- Finally, print $M$ lines describing the roads in the state B in the same format.

### Constraints
- $2 \le N \le 300$
- $N - 1 \le M \le 300$
- $1 \le u, v \le N$
- $u \neq v$
- the graphs describing the states A and B should both be connected

### Scoring
If the output produced by your solution is not a valid test case or if all four heuristics solve the produced test case correctly, you will receive the Wrong Answer verdict. Otherwise, if $k$ heuristics fail on the produced test case and the other $4 - k$ heuristics solve it correctly, the score of your submission will be
$$21 \cdot k + \left\lfloor \frac{2400}{\mathrm{max}(M, 100)} \right\rfloor - 8 \,.$$

For technical reasons, this problem uses relative scoring. Your goal is to maximise the score of your submission. The best submission will receive 100 points. Then, the number of points received by each submission will be proportional to the score. (Note that if there is at least one perfect solution, the type of scoring does not affect the results since the number of points is equal to the score.)

### Example Output
```
4 4
1 2
2 3
3 4
1 3
1 4
2 3
2 1
2 4
```

### Explanation
The example output above will receive the Wrong Answer verdict because all four heuristics solve it correctly. The example is only here to demonstrate the output format, i.e. it is a valid test case for CNNCT2.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>