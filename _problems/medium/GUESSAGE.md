---
{"category_name":"medium","problem_code":"GUESSAGE","problem_name":"Guess My Age","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"20-04-2019","tags":{"0":"bellman","1":"cook105","2":"cookoff","3":"kingofnumbers","4":"medium","5":"negative","6":"shortest"},"editorial_url":"https://discuss.codechef.com/problems/GUESSAGE","time":{"view_start_date":1555871402,"submit_start_date":1555871402,"visible_start_date":1555871402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK105/hindi/GUESSAGE.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK105/mandarin/GUESSAGE.pdf), [Russian](http://www.codechef.com/download/translated/COOK105/russian/GUESSAGE.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK105/vietnamese/GUESSAGE.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK105/bengali/GUESSAGE.pdf) as well.

A group of $N$ people (numbered $1$ through $N$) claimed that Chef is only good at cooking, but nothing else. Chef wanted to prove them wrong, so he accepted a challenge from them to guess their ages.

The $N$ people gave Chef $M$ pieces of information to help him. Each piece of information is described by four integers $t$, $u$, $v$ and $c$ with the following meaning:
- If $t = 1$, the $u$-th person is older than the $v$-th person by at least $c$ years.
- If $t = 2$, the $u$-th person is **not** older than the $v$-th person by at least $c$ years.

Chef also knows that all the ages are integers (strangely, not necessarily positive integers) and that the age of person $1$ is zero.

Before Chef started thinking about the ages, he asked you to tell him whether it is even possible to determine the ages of all $N$ people uniquely using the information he has. Find out if it is possible and what the ages of these $N$ people are in that case.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- Each of the following $M$ lines contains four space-separated integers $t$, $u$, $v$ and $c$ describing one piece of information.

### Output
For each test case:
- If it is impossible to uniquely determine the ages of all the people, print a single line containing the string `"NO"` (without quotes).
- Otherwise, print two lines.
- The first of these lines should contain a single string `"YES"` (without quotes).
- The second line should contain $N$ space-separated integers denoting the ages of people $1, 2, \ldots, N$ respectively.

### Constraints 
- $1 \le T \le 1,000$
- $2 \le N \le 1,000$
- $1 \le M \le 5,000$
- $1 \le t \le 2$
- $u \neq v$
- $1 \le c \le 10^9$
- the sum of $N$ over all test cases does not exceed $10,000$
- the sum of $M$ over all test cases does not exceed $50,000$

### Example Input
```
3
2 1
1 1 2 5
2 2
1 2 1 6
2 2 1 7
2 2
1 2 1 6
2 2 1 6
```

### Example Output
```
NO
YES
0 6
NO
```
