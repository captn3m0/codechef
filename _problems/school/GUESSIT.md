---
{"category_name":"school","problem_code":"GUESSIT","problem_name":"Guess the Number","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/kQdAQPQku7E","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"akash_adm","problem_tester":"","date_added":"19-03-2021","tags":{"0":"akash_adm","1":"cook127","2":"math","3":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/GUESSIT","time":{"view_start_date":1616351402,"submit_start_date":1616351402,"visible_start_date":1616351402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GUESSIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK127/mandarin/GUESSIT.pdf), [Russian](https://www.codechef.com/download/translated/COOK127/russian/GUESSIT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK127/vietnamese/GUESSIT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK127/bengali/GUESSIT.pdf) as well.

**This is an interactive problem.**

Chef has a secret integer. The only information you have is that it has an odd number of [factors](https://en.wikipedia.org/wiki/Divisor) and that it lies between $1$ and $10^6$ inclusive.

You have been challenged by Chef to find his number. You may make up to $2,000$ guesses (queries). Whenever you guess Chef's number, he only tells you if you guessed correctly or not. Can you find Chef's number?

### Interaction
- First, you should read a line containing a single integer $T$ ― the number of test cases. The description of interaction for $T$ test cases follows.
- For each test case, you should start by asking queries.
    - To ask a query, you should print a line containing an integer between $1$ and $10^6$ inclusive ― your guess.
    - Then, you should read a line containing a single integer: $1$ if you correctly guessed Chef's secret number, $0$ if your guess was incorrect or $-1$ if your guess is invalid (in particular, smaller than $1$ or greater than $10^6$) or you have asked more than $2,000$ queries.
- As soon as you have correctly guessed Chef's secret number, you should stop asking queries and continue solving the remaining test cases.

If you read $-1$, you must immediately terminate your program to receive a Wrong Answer verdict. Otherwise, you may receive any verdict. Don't forget to flush the output after printing each line! You can read more about interactive problems [here](https://codeforces.com/blog/entry/45307).

### Constraints
- $1 \le T \le 100$
- Chef's secret number lies between $1$ and $10^6$ inclusive
- Chef's secret number has an odd number of factors 

### Interaction
```
Grader          You
1
                232
0
                92739
0
                100
1
```

### Explanation
**Example case 1:**
- You ask Chef if $232$ is his secret number. Chef replies with $0$, so it is not.
- You ask Chef if $92,739$ is his secret number. Chef replies with $0$, so it is not.
- You ask Chef if $100$ is his secret number. Chef replies with $1$, so this is indeed his secret number.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>