---
{"category_name":"easy","problem_code":"CRDGAME2","problem_name":"Chef and Trump Cards","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2\r\n2 2\r\n4\r\n1 2 2 6","output":"2\r\n16","explanation":"**Example case 1:** We can only give both cards to Chef or both to Chefu. If we gave one of them to Chef and the other to Chefu, the game would end in a draw.\r\n\r\n**Example case 2:** One of the possible ways to avoid a draw is to give cards $1$ and $4$ to Chef and the rest to Chefu. Let\u0027s assume that Chef forms a pile with cards $[6,1]$ (from top to bottom); Chefu\u0027s pile is $[2,2]$. Then, the game proceeds like this:\r\n- In the first round, Chef draws the card with value $6$ and wins a card with value $2$ from Chefu, so his pile is $[1,6,1]$ and Chefu\u0027s pile is $[2]$ after this round. Note that the value of the card transferred from Chefu to Chef decreased to $1$.\r\n- In the second round, Chef draws a card with value $1$ and Chefu draws his card with value $2$, so Chefu wins the round. The value of the card that is transferred from Chef to Chefu decreases to $0$, so this card is removed from the game. After this round, Chef\u0027s pile is $[6,1]$ and Chefu\u0027s pile is $[2]$.\r\n- In the third round, Chef again draws the card with value $6$ and wins Chefu\u0027s last card. After this round, Chef\u0027s pile is $[1,6,1]$ and Chefu\u0027s pile is empty. Therefore, Chefu loses the game.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/AW238OpD6BY","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"utkarsh911","problem_tester":"","date_added":"7-07-2020","tags":{"0":"basic","1":"combinatorics","2":"modular","3":"observation","4":"sept20","5":"utkarsh911","6":"utkarsh911"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CRDGAME2","time":{"view_start_date":1600075802,"submit_start_date":1600075802,"visible_start_date":1600075802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CRDGAME2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT20/hindi/CRDGAME2.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT20/bengali/CRDGAME2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT20/mandarin/CRDGAME2.pdf), [Russian](https://www.codechef.com/download/translated/SEPT20/russian/CRDGAME2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT20/vietnamese/CRDGAME2.pdf) as well.

Chef is playing a card game with his friend Chefu. The rules of the game are as follows:
- There are two piles of cards. One pile belongs to Chef and the other to Chefu. One pile may be empty.
- At any moment, each card used in the game has a positive integer value. Whenever the value of a card becomes non-positive, it is removed from the game.
- The game is played in rounds. In each round, each player simultaneously draws one card from the top of his pile.
- If one player's pile is empty, this player cannot draw a card and therefore loses the game. (Note that it is impossible for both piles to be empty.)
- If the values of the drawn cards are equal, each player simply places the card he drew to the bottom of his pile.
- Otherwise, the player whose card has the higher value wins this round. This player places the card he drew to the bottom of his pile. Then, the card his opponent drew is transferred to him and he places this card to the bottom of his pile (below the card he just drew) as well.
- Whenever a card is transferred from one player to the other, the value of that card decreases by $1$.
- When there is no transfer of cards between the players during $10^{100}$ consecutive rounds, each player calculates the sum of values of the cards that are currently in his pile. If one player has a higher sum, this player wins the game. Otherwise, the game ends in a draw.

You are given $N$ cards (numbered $1$ through $N$). For each valid $i$, the value of the $i$-th card is $C_i$. Your task is to distribute the cards between the players before the start of the game ― assign each card to one of the players. It is not necessary to distribute the cards equally between the players in any way. After you distribute the cards, each player arranges the cards in his pile in some order he chooses (not necessarily good for this player). Once the game starts, they may not rearrange their piles anymore.

Find the number of distributions of cards such that it is impossible for the game to end in a draw, regardless of how the players form their starting piles. Since this number might be large, compute it modulo $1,000,000,007$. Two distributions of cards are different if there is an integer $i$ ($1 \le i \le N$) such that the $i$-th card belongs to Chef in one distribution and to Chefu in the other distribution.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $C_1, C_2, \ldots, C_N$.

### Output
For each test case, print a single line containing one integer ― the number of ways to distribute the cards between the players such that the game does not end in a draw, modulo $1,000,000,007$.

### Constraints
- $1 \le T \le 200$
- $1 \le N \le 10^5$
- $1 \le C_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (5 points):** $N \le 8$

**Subtask #2 (25 points):** $N \le 200$

**Subtask #3 (70 points):** original constraints 

### Example Input
```
2
2
2 2
4
1 2 2 6
```

### Example Output
```
2
16
```

### Explanation
**Example case 1:** We can only give both cards to Chef or both to Chefu. If we gave one of them to Chef and the other to Chefu, the game would end in a draw.

**Example case 2:** One of the possible ways to avoid a draw is to give cards $1$ and $4$ to Chef and the rest to Chefu. Let's assume that Chef forms a pile with cards $[6,1]$ (from top to bottom); Chefu's pile is $[2,2]$. Then, the game proceeds like this:
- In the first round, Chef draws the card with value $6$ and wins a card with value $2$ from Chefu, so his pile is $[1,6,1]$ and Chefu's pile is $[2]$ after this round. Note that the value of the card transferred from Chefu to Chef decreased to $1$.
- In the second round, Chef draws a card with value $1$ and Chefu draws his card with value $2$, so Chefu wins the round. The value of the card that is transferred from Chef to Chefu decreases to $0$, so this card is removed from the game. After this round, Chef's pile is $[6,1]$ and Chefu's pile is $[2]$.
- In the third round, Chef again draws the card with value $6$ and wins Chefu's last card. After this round, Chef's pile is $[1,6,1]$ and Chefu's pile is empty. Therefore, Chefu loses the game.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>