---
{"category_name":"medium","problem_code":"RANDKNAP","problem_name":"Random Knapsack","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"isaf27","problem_tester":"","date_added":"26-09-2020","tags":{"0":"isaf27","1":"meet","2":"oct20","3":"randomized"},"problem_difficulty_level":"Medium","best_tag":"Meet In Middle","editorial_url":"https://discuss.codechef.com/problems/RANDKNAP","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RANDKNAP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT20/hindi/RANDKNAP.pdf), [Bengali](https://www.codechef.com/download/translated/OCT20/bengali/RANDKNAP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT20/mandarin/RANDKNAP.pdf), [Russian](https://www.codechef.com/download/translated/OCT20/russian/RANDKNAP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT20/vietnamese/RANDKNAP.pdf) as well.

You are given $N = 240$ integers, randomly generated in $[0; 998\,244\,353)$.

You need to answer $Q$ queries, in each query, you are given one integer $X$, $0 \leq X < 998\,244\,353$. And you need to find a subset of given integers with sum $X$, modulo $998\,244\,353$.

For each test case, it is guaranteed that at least one such subset exists.

###Input:

- The first line contains one integer $N = 240$.
- The second line contains $N$ integers, $A_1, A_2, \ldots, A_N$ ($0 \leq A_i < 998\,244\,353$).
- The third line contains one integer $Q$.
- The next line contains $Q$ integers $X_1, X_2, \ldots, X_Q$ ($0 \leq X_i < 998\,244\,353$).

###Output:
For each query, assume that you've chosen indices $1 \leq i_1 < i_2 < \ldots < i_k$. Then, denote $Y = 2^{i_1 - 1} + 2^{i_2 - 1} + \ldots + 2^{i_k - 1}$. You have to print four integers: $Y \mod 2^{60}, (\lfloor \frac{Y}{2^{60}} \rfloor) \mod 2^{60},  (\lfloor \frac{Y}{2^{120}} \rfloor) \mod 2^{60},  (\lfloor \frac{Y}{2^{180}} \rfloor) \mod 2^{60}$.

If there are several possible solutions, you can print any.

###Constraints 
- $1 \leq Q \leq 300\,000$.

###Subtasks
- 10 points : $1 \leq Q \leq 300$
- 10 points : $1 \leq Q \leq 3000$
- 10 points : $1 \leq Q \leq 30\,000$
- 70 points : $1 \leq Q \leq 300\,000$

###Sample:
There are no samples for this problem.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>