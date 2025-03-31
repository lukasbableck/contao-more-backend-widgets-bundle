# contao-more-backend-widgets-bundle

This bundle adds backend widgets/inputTypes which can for example be used in other extensions or in RockSolid Custom Elements.

Currently the following widgets are available:
- charPicker
- color
- number
- range

## Usage
```
...
'inputType' => 'number' // or any other widget from the above
...
```

## Widgets

### charPicker

This is used by [lukasbableck/contao-title-description-bundle](https://github.com/lukasbableck/contao-title-description-bundle).\
It is intended to be used in combination with a JS script and wont do anything on its own.\
The widget is not designed to save any value in the database.

<img width="626" alt="image" src="https://github.com/user-attachments/assets/ad4c0dba-0b47-4036-a3d3-c83ea12b31dc">

### color

Adds a color picker widget with both a normal text input and a color input.\
It's recommended to use `'rgxp' => 'color'` and `'isHexColor' => true` for fields with this inputType.\
Aside from the `color` regexp, this bundle also adds `colorHex`, `colorHexRGB` and `colorHexRGBA` regexps.

![image](https://github.com/user-attachments/assets/5c88bcf9-c917-475f-aa94-c3b4a13198b7)

### number

Supports min and max attributes via eval.minval/eval.maxval and step via eval.step.

<img width="313" alt="image" src="https://github.com/user-attachments/assets/072842fc-6b32-4f5a-8da7-732c61644a59">

### range

Supports min and max attributes via eval.minval/eval.maxval and step via eval.step.

<img width="313" alt="image" src="https://github.com/user-attachments/assets/b5f0ea5c-f83c-4719-87e4-d10f06a82337">


## Regular expressions

### color

Expects a color in the format `RRGGBB`, where `RR`, `GG` and `BB` are hexadecimal values between `00` and `FF`.\
This regexp is intended to be used in combination with the `color` inputType.

### colorHex

Expects a color in the format `#RGB`, `#RRGGBB`, `#RGBA` or `#RRGGBBAA`, where `R`, `G`, `B` and `A` are hexadecimal values between `0` and `F`.

### colorHexRGB

Expects a color in the format `#RGB` or `#RRGGBB`, where `R`, `G` and `B` are hexadecimal values between `0` and `F`.

### colorHexRGBA

Expects a color in the format `#RGBA` or `#RRGGBBAA`, where `R`, `G`, `B` and `A` are hexadecimal values between `0` and `F`.
