---
{"category_name":"easy","problem_code":"CHEFDIL","problem_name":"Dilemma","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n10","output":"WIN","explanation":"**Example case 1:** First, Chef should remove the first card, which makes the second card face up. Then, he should remove the second card. This way, all cards are removed and Chef wins.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"utkarsh22garg","problem_tester":null,"date_added":"22-05-2019","tags":{"0":"aug19","1":"easy","2":"game","3":"observation","4":"utkarsh22garg","5":"utkarsh22garg","6":"vijju123"},"problem_difficulty_level":"Easy","best_tag":"Game Theory","editorial_url":"https://discuss.codechef.com/problems/CHEFDIL","time":{"view_start_date":1565602202,"submit_start_date":1565602202,"visible_start_date":1565602202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFDIL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG19/hindi/CHEFDIL.pdf), [Bengali](https://www.codechef.com/download/translated/AUG19/bengali/CHEFDIL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG19/mandarin/CHEFDIL.pdf), [Russian](https://www.codechef.com/download/translated/AUG19/russian/CHEFDIL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG19/vietnamese/CHEFDIL.pdf) as well.

Chef has no work to do in the kitchen, so he decided to play a card game with the following rules:
- Initially, $N$ cards are placed in a row on a table. Each card is placed either face up or face down.
- The goal of the game is to remove all cards from the table, one by one.
- A card may be removed only if it is currently facing up.
- When a card is removed, its adjacent cards (the cards directly to its left and right, if they exist) are flipped, i.e. a card that was facing up will be facing down and vice versa.
- There is an empty space left behind each removed card, i.e. the remaining cards are not moved to create a contiguous row of cards again. Therefore, if the game starts with three cards and the middle card is removed, then the cards on the sides are flipped, but removing one of these cards afterwards does not cause the other card to be flipped, since it is only adjacent to the empty space created by removing the middle card.

Determine whether Chef is able to win this game.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single string $S$ describing the row of cards initially placed on the table. Each character of this string is either '1', denoting a face up card, or '0', denoting a face down card.

### Output
For each test case, print a single line containing the string `"WIN"` if Chef can win the game or `"LOSE"` if he cannot win (without quotes).

### Constraints 
- $1 \le T \le 10^2$
- $1 \le |S| \le 10^5$

### Subtasks
**Subtask #1 (30 points):**
- $1 \le T \le 10$
- $1 \le |S| \le 100$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
10
```

### Example Output
```
WIN
```

### Explanation
**Example case 1:** First, Chef should remove the first card, which makes the second card face up. Then, he should remove the second card. This way, all cards are removed and Chef wins.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>