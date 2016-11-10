package flames;

import java.awt.*;
import java.applet.*;
import java.awt.event.*;

public class list extends Applet implements ActionListener{
Button b;
public void actionPerformed(ActionEvent e)
{
	b.setLabel("haha");
}
public list()
{
	b=new Button("markas Read");
}
public void init()
{
	b.addActionListener(this);
	add(b);
}

}