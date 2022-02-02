---
{"category_name":"easy","problem_code":"ALLSUB","problem_name":"All Substrings","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\naa\nababab\naaa\nramialsadaka\nsaid\nsryhieni\ncode\ncodeisfun","output":"aaabbb\naaaaadiklmrs\nImpossible\ncodefinsu","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mhammad1","problem_tester":null,"date_added":"26-09-2019","tags":{"0":"deadwing97","1":"ltime76","2":"mhammad1"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ALLSUB","time":{"view_start_date":1569690002,"submit_start_date":1569690002,"visible_start_date":1569690002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ALLSUB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME76/hindi/ALLSUB.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME76/bengali/ALLSUB.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME76/mandarin/ALLSUB.pdf), [Russian](https://www.codechef.com/download/translated/LTIME76/russian/ALLSUB.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME76/vietnamese/ALLSUB.pdf) as well.

You are given two strings $S$ and $R$. You may reorder the characters in the string $R$ in any way; let's denote the resulting string by $R_r$. This reordered string is *valid* if it contains all substrings of $S$, i.e. for each substring $s$ of $S$ (including $S$ itself), $R_r$ contains $s$ as a substring.

Find the lexicographically smallest valid reordered string or determine that there is no such valid string.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single string $S$.
- The second line contains a single string $R$.

### Output
For each test case, print a single line containing one string — the lexicographically smallest valid reordered string, or `"Impossible"` if there is no such string.

### Constraints
- $1 \le T \le 1,000$
- $1 \le |S|, |R| \le 10^5$
- $S$ and $R$ contain only lowercase English letters
- the sum of $|S|$ over all test cases does not exceed $10^6$
- the sum of $|R|$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $1 \le |S|, |R| \le 1,000$
- $S$ and $R$ contain only the characters 'a' and 'b'
- the sum of $|S|$ in all test cases does not exceed $10^4$
- the sum of $|R|$ in all test cases does not exceed $10^4$

**Subtask #2 (50 points):** original constraints

### Example Input
```
4
aa
ababab
aaa
ramialsadaka
said
sryhieni
code
codeisfun
```

### Example Output
```
aaabbb
aaaaadiklmrs
Impossible
codefinsu
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>