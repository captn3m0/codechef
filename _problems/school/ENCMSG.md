---
{"category_name":"school","problem_code":"ENCMSG","problem_name":"Encoding Message","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"20-07-2018","tags":{"0":"cook96","1":"implementation","2":"kingofnumbers","3":"string"},"editorial_url":"https://discuss.codechef.com/problems/ENCMSG","time":{"view_start_date":1532284205,"submit_start_date":1532284205,"visible_start_date":1532284205,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK96/mandarin/ENCMSG.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK96/russian/ENCMSG.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK96/vietnamese/ENCMSG.pdf" target="_blank">Vietnamese</a> as well.</h3>

Chef recently graduated Computer Science in university, so he was looking for a job. He applied for several job offers, but he eventually settled for a software engineering job at ShareChat. Chef was very enthusiastic about his new job and the first mission assigned to him was to implement a message encoding feature to ensure the chat is private and secure.

Chef has a message, which is a string $S$ with length $N$ containing only lowercase English letters. It should be encoded in two steps as follows: 
- Swap the first and second character of the string $S$, then swap the 3rd and 4th character, then the 5th and 6th character and so on. If the length of $S$ is odd, the last character should not be swapped with any other.
- Replace each occurrence of the letter 'a' in the message obtained after the first step by the letter 'z', each occurrence of 'b' by 'y', each occurrence of 'c' by 'x', etc, and each occurrence of 'z' in the message obtained after the first step by 'a'.

The string produced in the second step is the encoded message. Help Chef and find this message.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains the message string $S$.

### Output
For each test case, print a single line containing one string — the encoded message.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 100$
- $|S| = N$
- $S$ contains only lowercase English letters

### Example Input
```
2
9
sharechat
4
chef
```

### Example Output
```
shizxvzsg
sxuv
```

### Explanation
**Example case 1:** The original message is "sharechat". In the first step, we swap four pairs of letters (note that the last letter is not swapped), so it becomes "hsraceaht". In the second step, we replace the first letter ('h') by 's', the second letter ('s') by 'h', and so on, so the resulting encoded message is "shizxvzsg".
