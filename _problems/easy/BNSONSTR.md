---
{"category_name":"easy","problem_code":"BNSONSTR","problem_name":"Binary String on Steroids","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/u79a4E3h05M","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"prasant21","problem_tester":"","date_added":"18-06-2021","tags":{"0":"cook130","1":"easy","2":"prasant21"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BNSONSTR","time":{"view_start_date":1624214704,"submit_start_date":1624214704,"visible_start_date":1624214704,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BNSONSTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK130/mandarin/BNSONSTR.pdf), [Russian](https://www.codechef.com/download/translated/COOK130/russian/BNSONSTR.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK130/vietnamese/BNSONSTR.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK130/bengali/BNSONSTR.pdf) as well.

A circular binary string is called *good* if it contains at least one character '1' and there is an integer $d$ such that for each character '1', the distance to the nearest character '1' clockwise is $d$.

You are given a circular binary string $S$ with length $N$. You may choose some characters in this string and flip them (i.e. change '1' to '0' or vice versa). Convert the given string into a good string by flipping the smallest possible number of characters.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $S$ with length $N$.

### Output
Print a single line containing one integer ― the minimum number of flips required to transform the initial string into a good string.

### Constraints
- $1 \leq T \leq 100$
- $1 \leq N \leq 5 \cdot 10^5$
- $S$ contains only characters '0' and '1'
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Example Input
```
2
6
110011
4
0001
```

### Example Output
```
2
0
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>